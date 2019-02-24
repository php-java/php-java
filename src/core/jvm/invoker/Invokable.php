<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInvoker;
use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Exceptions\UndefinedMethodException;
use PHPJava\Exceptions\UndefinedOpCodeException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Attributes\AttributeInterface;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Core\Accumulator;
use PHPJava\Kernel\Core\ConstantPool;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\OpCode\OpCodeInterface;
use PHPJava\Kernel\Structures\_MethodInfo;

trait Invokable
{
    private $javaClassInvoker;
    private $methods = [];

    public function __construct(JavaClassInvoker $javaClassInvoker, array $methods)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->methods = $methods;
    }

    public function __call($name, $arguments)
    {
        $getCodeAttribute = function ($attributes) {
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
        $method = $this->methods[$name] ?? null;
        if ($method === null) {
            throw new UndefinedMethodException('Undefined ' . $name . ' method.');
        }

        $codeAttribute = $getCodeAttribute($method->getAttributes());

        if ($codeAttribute === null) {
            throw new IllegalJavaClassException('Java class does not having code attribution.');
        }

        $handle = fopen('php://memory', 'r+');
        fwrite($handle, $codeAttribute->getCode());
        rewind($handle);

        // debug code attribution with HEX
        // var_dump(implode(' ', str_split(bin2hex($codeAttribute->getCode()), 2)));

        $reader = new BinaryReader($handle);

        $localStorage = [
            $arguments[0] ?? null,
            $arguments[1] ?? null,
            $arguments[2] ?? null,
            $arguments[3] ?? null,
        ];

        $stacks = [];
        $opcodeMap = new OpCode();
        $executedCounter = 0;
        while ($reader->getOffset() < $codeAttribute->getOpCodeLength()) {
            if (++$executedCounter > \PHPJava\Core\JVM\Parameter\Invoker::MAX_STACK_EXCEEDED) {
                throw new RuntimeException('Max stack exceeded. PHPJava has been stopped by safety guard. Maybe Java class has illegal program counter, stacks, or OpCode.');
            }
            $cursor = $reader->readUnsignedByte();
            $opcode = $opcodeMap->getName($cursor);
            if ($opcode === null) {
                throw new UndefinedOpCodeException('Undefined OpCode ' . sprintf('0x%X', $cursor) . '.');
            }
            $pointer = $reader->getOffset() - 1;

            var_dump($cursor, $pointer);

            $fullName = '\\PHPJava\\Kernel\\OpCode\\' . $opcode;

            echo 'Mnemonic: ' . $opcode . "\n";

            /**
             * @var OpCodeInterface|Accumulator|ConstantPool $executor
             */
            $executor = new $fullName();
            $executor->setConstantPool($this->javaClassInvoker->getJavaClass()->getConstantPool());
            $executor->setParameters($this->javaClassInvoker, $reader, $localStorage, $stacks, $pointer);
            $returnValue = $executor->execute();

            if ($returnValue !== null) {
                return $returnValue;
            }
        }

        return null;
    }
}
