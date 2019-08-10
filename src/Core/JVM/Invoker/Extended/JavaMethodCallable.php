<?php
namespace PHPJava\Core\JVM\Invoker\Extended;

use ByteUnits\Metric;
use PHPJava\Core\JVM\Cache\OperationCache;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\NoSuchCodeAttributeException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Exceptions\UnableToFindAttributionException;
use PHPJava\Exceptions\UndefinedOpCodeException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Core\Accumulator;
use PHPJava\Kernel\Core\ConstantPool;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Mnemonics\OperationCodeInterface;
use PHPJava\Kernel\Provider\DependencyInjectionProvider;
use PHPJava\Kernel\Resolvers\AttributionResolver;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Packages\java\lang\UnsupportedOperationException;
use PHPJava\Utilities\Formatter;

trait JavaMethodCallable
{
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

        $methodBeautified = Formatter::beatifyMethodFromConstantPool(
            $method,
            $currentConstantPool
        );

        try {
            /**
             * @var CodeAttribute $codeAttribute
             */
            $codeAttribute = AttributionResolver::resolve(
                $method->getAttributes(),
                CodeAttribute::class
            );
        } catch (UnableToFindAttributionException $e) {
            $this->debugTool->getLogger()->info('No code attribution: ' . $methodBeautified);
            throw new NoSuchCodeAttributeException($methodBeautified);
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
                [$name]
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
             * @var Accumulator|ConstantPool|OperationCodeInterface $executor
             */
            $executor = $operationCache->fetchOrPush(
                $fullName,
                function () use ($fullName) {
                    return new $fullName();
                }
            );

            // Run executor
            $executor
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

            /**
             * Return processing as following:
             *  - areturn (Return an object)
             *  - ireturn (Return integer object)
             *  - dreturn (Return double obejct)
             *  - freturn (Return float object)
             *  - lreturn (Return long object)
             *  - return  (Return void obejct).
             */
            if ($executor->returnValue() !== null) {
                if ($isEnabledTrace) {
                    $this->javaClassInvoker->getJavaClass()->appendDebug($debugTraces);
                }
                $this->debugTool->getLogger()->info('Finish operations: ' . $methodBeautified);

                // return values
                return $executor
                    ->returnValue();
            }
        }

        if ($isEnabledTrace) {
            $this->javaClassInvoker->getJavaClass()->appendDebug($debugTraces);
        }
        $this->debugTool->getLogger()->info('Finish operations: ' . $methodBeautified);
        return null;
    }
}
