<?php
namespace PHPJava\Core\JVM\Invoker;

use ByteUnits\Metric;
use PHPJava\Core\JavaClassInvoker;
use PHPJava\Core\JVM\Cache\OperationCache;
use PHPJava\Core\JVM\FlexibleMethod;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Exceptions\UnableToFindAttributionException;
use PHPJava\Exceptions\UndefinedMethodException;
use PHPJava\Exceptions\UndefinedOpCodeException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Core\Accumulator;
use PHPJava\Kernel\Core\ConstantPool;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Mnemonics\OperationInterface;
use PHPJava\Kernel\Provider\DependencyInjectionProvider;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Packages\java\lang\NoSuchMethodException;
use PHPJava\Packages\java\lang\UnsupportedOperationException;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\DebugTool;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\SuperClassResolver;
use PHPJava\Utilities\TypeResolver;

trait Invokable
{
    /**
     * @var JavaClassInvoker
     */
    private $javaClassInvoker;

    /**
     * @var _MethodInfo[]
     */
    private $methods = [];

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var DebugTool
     */
    private $debugTool;
    private $isInstantiatedStaticInitializer = false;

    /**
     * @param _MethodInfo[] $methods
     */
    public function __construct(JavaClassInvoker $javaClassInvoker, array $methods, array $options = [])
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->methods = $methods;
        $this->options = $options;
        $this->debugTool = new DebugTool(
            str_replace('/', '.', $javaClassInvoker->getJavaClass()->getClassName()),
            $this->options
        );
    }

    /**
     * @throws IllegalJavaClassException
     * @throws RuntimeException
     * @throws UndefinedOpCodeException
     * @throws \PHPJava\Exceptions\TypeException
     * @throws \PHPJava\Exceptions\UnableToFindAttributionException
     */
    public function call(string $name, ...$arguments)
    {
        /**
         * Call static initializer from static accessor.
         */
        $this->javaClassInvoker
            ->getStatic()
            ->getMethods()
            ->callStaticInitializerIfNotInstantiated();

        $operationCache = new OperationCache();
        $this->debugTool->getLogger()->debug('Call method: ' . $name);

        $currentConstantPool = $this->javaClassInvoker
            ->getJavaClass()
            ->getConstantPool();

        // Wrap _Char
        foreach ($arguments as &$argument) {
            if (is_string($argument) && strlen($argument) === 1) {
                $argument = new _Char($argument);
            }
        }

        $constantPool = $currentConstantPool->getEntries();

        $convertedPassedArguments = $this->stringifyArguments(...$arguments);

        /**
         * @var _MethodInfo $method
         */
        $method = $operationCache->fetchOrPush(
            "{$name}.{$convertedPassedArguments}",
            function () use ($name, $arguments) {
                return $this->findMethod(
                    $name,
                    ...$arguments
                );
            }
        );

        $currentConstantPool = $method->getConstantPool() ?? $currentConstantPool;

        if ($method instanceof FlexibleMethod) {
            /**
             * @var FlexibleMethod $method
             */
            return $method(...$arguments);
        }

        try {
            $codeAttribute = AttributionResolver::resolve(
                $method->getAttributes(),
                CodeAttribute::class
            );
        } catch (UnableToFindAttributionException $e) {
            // No action.
            return;
        }

        $handle = fopen(
            $this->options['operations']['temporary_code_stream'] ??
            GlobalOptions::get('operations.temporary_code_stream') ??
            Runtime::OPERATIONS_TEMPORARY_CODE_STREAM,
            'r+'
        );
        fwrite($handle, $codeAttribute->getCode());
        rewind($handle);

        // debug code attribution with HEX
        $isEnabledTrace = $this->options['operations']['enable_trace'] ?? GlobalOptions::get('operations.enable_trace') ?? Runtime::OPERATIONS_ENABLE_TRACE;
        $debugTraces = [];
        if ($isEnabledTrace) {
            $debugTraces['raw_code'] = $codeAttribute->getCode();
            $debugTraces['method'] = $method;
            $debugTraces['mnemonic_indexes'] = [];
            $debugTraces['executed'] = [];
        }

        $reader = new BinaryReader($handle);

        if ($this->isDynamic()) {
            array_unshift(
                $arguments,
                $this->javaClassInvoker->getJavaClass()
            );
        }

        $stacks = [];
        $mnemonicMap = new OpCode();
        $executedCounter = 0;
        $executionTime = microtime(true);
        $maxExecutionTime = ($this->options['max_execution_time'] ?? GlobalOptions::get('max_execution_time') ?? Runtime::MAX_EXECUTION_TIME);

        $methodBeautified = Formatter::beatifyMethodFromConstantPool(
            $method,
            $currentConstantPool
        );

        $this->debugTool->getLogger()->info('Start operations: ' . $methodBeautified);

        $arguments = array_map(
            function ($argument) {
                return TypeResolver::convertPHPTypeToJavaType($argument);
            },
            $arguments
        );

        $localStorage = [];
        foreach ($arguments as $argument) {
            $localStorage[] = $argument;
            if ($argument instanceof _Double || $argument instanceof _Long) {
                // Double and Long have a problem of skipping the next storage.
                $localStorage[] = null;
            }
        }

        $dependencyInjectionProvider = (new DependencyInjectionProvider())
            ->add(
                'ConstantPool',
                $currentConstantPool
            )
            ->add(
                'JavaClass',
                $this->javaClassInvoker->getJavaClass()
            )
            ->add(
                'JavaClassInvoker',
                $this->javaClassInvoker
            )
            ->add(
                'Attributes',
                $method->getAttributes()
            )
            ->add(
                'Options',
                $this->options
            );

        while ($reader->getOffset() < $codeAttribute->getOpCodeLength()) {
            $dependencyInjectionProvider
                ->add('OperandStacks', $stacks)
                ->add('LocalStorages', $localStorage);

            if (++$executedCounter > ($this->options['max_stack_exceeded'] ?? GlobalOptions::get('max_stack_exceeded') ?? Runtime::MAX_STACK_EXCEEDED)) {
                throw new RuntimeException(
                    'Max stack exceeded. PHPJava has been stopped by safety guard.' .
                    ' Maybe Java class has illegal program counter, stacks, or OpCode.'
                );
            }
            $exceededTime = microtime(true) - $executionTime;
            if ($exceededTime > $maxExecutionTime) {
                throw new RuntimeException(
                    'Maximum execution time of ' . $maxExecutionTime . ' seconds exceeded. PHPJava has been stopped by safety guard.' .
                    ' Maybe Java class has illegal program counter, stacks, or OpCode.'
                );
            }
            $opcode = $reader->readUnsignedByte();
            $mnemonic = $mnemonicMap->getName($opcode);

            if ($mnemonic === null) {
                throw new UndefinedOpCodeException(
                    'Call to undefined OpCode ' . sprintf('0x%X', $opcode) . '.'
                );
            }
            $pointer = $reader->getOffset() - 1;

            $fullName = '\\PHPJava\\Kernel\\Mnemonics\\' . $mnemonic;

            if (!class_exists($fullName)) {
                throw new UnsupportedOperationException(
                    sprintf(
                        '%s(0x%02X) operation does not supported.',
                        ltrim($mnemonic, '_'),
                        $opcode
                    )
                );
            }

            if ($isEnabledTrace) {
                $debugTraces['executed'][] = [$opcode, $mnemonic, $localStorage, $stacks, $pointer];
                $debugTraces['mnemonic_indexes'][] = $pointer;
            }

            $this->debugTool->getLogger()->debug(
                vsprintf(
                    'OpCode: 0x%02X %-15.15s Stacks: %-4.4s PC: %-8.8s Used Memory: %-8.8s Used Memory Peak: %-8.8s',
                    [
                        $opcode,
                        ltrim($mnemonic, '_'),
                        count($stacks),
                        $pointer,
                        Metric::bytes(memory_get_usage())->format(),
                        Metric::bytes(memory_get_peak_usage())->format(),
                    ]
                ),
                [
                    $name,
                ]
            );

            $beforeTrigger = $this->options['operations']['injections']['before'] ?? GlobalOptions::get('operations.injections.before');
            if (is_callable($beforeTrigger)) {
                $beforeTrigger(
                    $this->javaClassInvoker,
                    $stacks,
                    $localStorage,
                    $reader,
                    $currentConstantPool
                );
            }

            /**
             * @var Accumulator|ConstantPool|OperationInterface $executor
             */
            $executor = $operationCache->fetchOrPush(
                $fullName,
                function () use ($fullName) {
                    return new $fullName();
                }
            );
            $returnValue = $executor
                ->setConstantPool($currentConstantPool)
                ->setParameters(
                    $method,
                    $this->javaClassInvoker,
                    $reader,
                    $localStorage,
                    $stacks,
                    $pointer,
                    $dependencyInjectionProvider
                )
                ->execute();

            $afterTrigger = $this->options['operations']['injections']['after'] ?? GlobalOptions::get('operations.injections.after');
            if (is_callable($afterTrigger)) {
                $afterTrigger(
                    $this->javaClassInvoker,
                    $stacks,
                    $localStorage,
                    $reader,
                    $currentConstantPool
                );
            }

            if ($opcode === OpCode::_return ||
                $opcode === OpCode::_areturn ||
                $opcode === OpCode::_freturn ||
                $opcode === OpCode::_dreturn ||
                $opcode === OpCode::_ireturn ||
                $opcode === OpCode::_lreturn
            ) {
                if ($isEnabledTrace) {
                    $this->javaClassInvoker->getJavaClass()->appendDebug($debugTraces);
                }
                $this->debugTool->getLogger()->info('Finish operations: ' . $methodBeautified);
                return $returnValue;
            }
        }

        if ($isEnabledTrace) {
            $this->javaClassInvoker->getJavaClass()->appendDebug($debugTraces);
        }
        $this->debugTool->getLogger()->info('Finish operations: ' . $methodBeautified);
        return null;
    }

    /**
     * @return _MethodInfo[]
     */
    public function getList(): array
    {
        return $this->methods;
    }

    public function has(string $name): bool
    {
        return count($this->methods[$name] ?? []) > 0;
    }

    /**
     * @throws NoSuchMethodException
     * @throws UndefinedMethodException
     * @throws \PHPJava\Exceptions\TypeException
     * @throws \ReflectionException
     */
    private function findMethod(string $name, ...$arguments): _MethodInfo
    {
        $methodReferences = array_merge(
            $this->methods[$name] ?? [],
            (new SuperClassResolver())->resolveMethod(
                $name,
                $this->javaClassInvoker->getJavaClass()
            )[$name] ?? []
        );

        if (empty($methodReferences)) {
            if (!isset($methodReferences)) {
                throw new UndefinedMethodException('Call to undefined method ' . $name . '.');
            }
        }

        $convertedPassedArguments = $this->stringifyArguments(...$arguments);

        $this->debugTool->getLogger()->debug('Passed descriptor is ' . $convertedPassedArguments);

        $method = null;

        foreach ($methodReferences as $methodReference) {
            // If flexible method is available then Invoker use it all time.
            if ($methodReference instanceof FlexibleMethod) {
                return $methodReference;
            }
            $constantPool = $currentConstantPool = $methodReference->getConstantPool();
            $formattedArguments = Formatter::parseSignature(
                $constantPool[$methodReference->getDescriptorIndex()]->getString()
            )['arguments'];

            // does not strict mode can be PHP types
            if (!($this->options['strict'] ?? GlobalOptions::get('strict') ?? Runtime::STRICT)) {
                $formattedArguments = Formatter::signatureConvertToAmbiguousForPHP($formattedArguments);
            }

            /**
             * @var _MethodInfo $methodReference
             */
            $methodSignature = Formatter::buildArgumentsSignature($formattedArguments);

            $this->debugTool->getLogger()->debug('Find descriptor for ' . $methodSignature);

            if (!($this->options['validation']['method']['arguments_count_only'] ?? GlobalOptions::get('validation.method.arguments_count_only') ?? Runtime::VALIDATION_METHOD_ARGUMENTS_COUNT_ONLY)) {
                if (TypeResolver::compare($this->javaClassInvoker, $methodSignature, $convertedPassedArguments)) {
                    return $methodReference;
                }
            }
            if (($this->options['validation']['method']['arguments_count_only'] ?? GlobalOptions::get('validation.method.arguments_count_only') ?? Runtime::VALIDATION_METHOD_ARGUMENTS_COUNT_ONLY) === true) {
                $size = count($formattedArguments);
                $passedArgumentsSize = count(
                    $arguments
                );

                if ($size === $passedArgumentsSize) {
                    return $methodReference;
                }
            }
        }

        throw new NoSuchMethodException('Call to undefined method ' . $name . '.');
    }

    private function stringifyArguments(...$arguments): string
    {
        return Formatter::buildArgumentsSignature(
            array_map(
                function ($argument) {
                    return TypeResolver::convertPHPtoJava($argument);
                },
                $arguments
            )
        );
    }

    public function callStaticInitializerIfNotInstantiated()
    {
        if ($this->isInstantiatedStaticInitializer) {
            return $this;
        }

        $this->isInstantiatedStaticInitializer = true;
        if ($this->javaClassInvoker->getStatic()->getMethods()->has('<clinit>')) {
            $this->javaClassInvoker
                ->getStatic()
                ->getMethods()
                ->call(
                    '<clinit>'
                );
        }
        return $this;
    }
}
