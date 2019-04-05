<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInvoker;
use PHPJava\Core\JVM\FlexibleMethod;
use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Exceptions\UndefinedMethodException;
use PHPJava\Exceptions\UndefinedOpCodeException;
use PHPJava\Imitation\java\lang\NoSuchMethodException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Attributes\AttributeInterface;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Core\Accumulator;
use PHPJava\Kernel\Core\ConstantPool;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Mnemonics\OperationInterface;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\SuperClassResolver;
use PHPJava\Utilities\TypeResolver;

trait Invokable
{
    private $javaClassInvoker;
    private $methods = [];
    private $options = [];

    public function __construct(JavaClassInvoker $javaClassInvoker, array $methods, array $options = [])
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->methods = $methods;
        $this->options = $options;
    }

    /**
     * @param string $name
     * @param mixed ...$arguments
     * @return null
     * @throws IllegalJavaClassException
     * @throws NoSuchMethodException
     * @throws RuntimeException
     * @throws UndefinedMethodException
     * @throws UndefinedOpCodeException
     * @throws \PHPJava\Exceptions\TypeException
     */
    public function call(string $name, ...$arguments)
    {
        $getCodeAttribute = function ($attributes): ?CodeAttribute {
            foreach ($attributes as $attribute) {
                /**
                 * @var AttributeInfo $attribute
                 */
                if ($attribute->getAttributeData() instanceof CodeAttribute) {
                    return $attribute->getAttributeData();
                }
            }
            return null;
        };

        /**
         * @var _MethodInfo|null $method
         */
        $methodReferences = array_merge(
            $this->methods[$name] ?? [],
            (new SuperClassResolver())->resolveMethod($name, $this->javaClassInvoker->getJavaClass())[$name] ?? []
        );

        if (empty($methodReferences)) {
            if (!isset($methodReferences)) {
                throw new UndefinedMethodException('Call to undefined method ' . $name . '.');
            }
        }

        $currentConstantPool = $this->javaClassInvoker
            ->getJavaClass()
            ->getConstantPool();

        $constantPool = $currentConstantPool->getEntries();

        if ($name === '<init>' && $this->javaClassInvoker->getJavaClass()->hasParentClass()) {
            array_unshift(
                $arguments,
                $this->javaClassInvoker->getJavaClass()->getParentClass()
            );
        }

        // Find same method
        $convertedPassedArguments = Formatter::buildArgumentsSignature(
            array_map(
                function ($argument) {
                    return TypeResolver::convertPHPtoJava($argument);
                },
                $arguments
            )
        );

        $method = null;

        foreach ($methodReferences as $methodReference) {
            // If flexible method is available then Invoker use it all time.
            if ($methodReference instanceof FlexibleMethod) {
                $method = $methodReference;
                break;
            }
            $constantPool = ($currentConstantPool = $methodReference->getConstantPool())->getEntries();
            $formattedArguments = Formatter::parseSignature(
                $constantPool[$methodReference->getDescriptorIndex()]->getString()
            )['arguments'];

            // does not strict mode can be PHP types
            if (!($this->options['strict'] ?? true)) {
                $formattedArguments = Formatter::signatureConvertToAmbiguousForPHP($formattedArguments);
            }

            /**
             * @var _MethodInfo $methodReference
             */
            $methodSignature = Formatter::buildArgumentsSignature($formattedArguments);

            if (!($this->options['validation']['method']['arguments_count_only'] ?? false)) {
                if ($methodSignature === $convertedPassedArguments) {
                    $method = $methodReference;
                    break;
                }
            }
            if (($this->options['validation']['method']['arguments_count_only'] ?? false) === true) {
                $size = count($formattedArguments);
                $passedArgumentsSize = count(
                    $arguments
                );

                if ($size === $passedArgumentsSize) {
                    $method = $methodReference;
                    break;
                }
            }
        }

        if ($method === null) {
            throw new NoSuchMethodException('Call to undefined method ' . $name . '.');
        }

        if ($method instanceof FlexibleMethod) {
            /**
             * @var FlexibleMethod $method
             */
            return $method(...$arguments);
        }

        $codeAttribute = $getCodeAttribute($method->getAttributes());

        if ($codeAttribute === null) {
            throw new IllegalJavaClassException('Java class does not having code attribution.');
        }

        $handle = fopen('php://memory', 'r+');
        fwrite($handle, $codeAttribute->getCode());
        rewind($handle);

        // debug code attribution with HEX
        $debugTraces['raw_code'] = $codeAttribute->getCode();
        $debugTraces['method'] = $method;
        $debugTraces['mnemonic_indexes'] = [];
        $debugTraces['executed'] = [];

        $reader = new BinaryReader($handle);
        $localStorage = $arguments;

        if ($this->isDynamic()) {
            array_unshift(
                $localStorage,
                $this->javaClassInvoker->getJavaClass()
            );
        }

        $stacks = [];
        $mnemonicMap = new OpCode();
        $executedCounter = 0;
        while ($reader->getOffset() < $codeAttribute->getOpCodeLength()) {
            if (++$executedCounter > ($this->options['max_stack_exceeded'] ?? \PHPJava\Core\JVM\Parameters\Invoker::MAX_STACK_EXCEEDED)) {
                throw new RuntimeException(
                    'Max stack exceeded. PHPJava has been stopped by safety guard.' .
                    ' Maybe Java class has illegal program counter, stacks, or OpCode.'
                );
            }
            $opcode = $reader->readUnsignedByte();
            $mnemonic = $mnemonicMap->getName($opcode);

            if ($mnemonic === null) {
                throw new UndefinedOpCodeException('Call to undefined OpCode ' . sprintf('0x%X', $opcode) . '.');
            }
            $pointer = $reader->getOffset() - 1;

            $fullName = '\\PHPJava\\Kernel\\Mnemonics\\' . $mnemonic;
            $debugTraces['executed'][] = [$opcode, $mnemonic, $localStorage, $stacks, $pointer];
            $debugTraces['mnemonic_indexes'][] = $pointer;

            /**
             * @var OperationInterface|Accumulator|ConstantPool $executor
             */
            $executor = new $fullName();
            $executor->setConstantPool($currentConstantPool);
            $executor->setParameters(
                $this->javaClassInvoker,
                $reader,
                $localStorage,
                $stacks,
                $pointer
            );
            $returnValue = $executor->execute();

            if ($returnValue !== null) {
                $this->javaClassInvoker->getJavaClass()->appendDebug($debugTraces);
                return $returnValue;
            }
        }

        $this->javaClassInvoker->getJavaClass()->appendDebug($debugTraces);
        return null;
    }

    public function getList(): array
    {
        return $this->methods;
    }
}
