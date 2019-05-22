<?php
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Core\JVM\FlexibleMethod;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\UndefinedMethodException;
use PHPJava\Kernel\Resolvers\SuperClassResolver;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Packages\java\lang\NoSuchMethodException;
use PHPJava\Utilities\Formatter;

trait MethodFindable
{
    /**
     * @throws NoSuchMethodException
     * @throws UndefinedMethodException
     * @throws \PHPJava\Exceptions\TypeException
     * @throws \ReflectionException
     */
    protected function findMethod(string $name, ...$arguments): _MethodInfo
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
                throw new NoSuchMethodException(
                    'Call to undefined method ' . $name . '.'
                );
            }
        }

        $convertedPassedArguments = $this->stringifyArguments(...$arguments);

        $this->debugTool->getLogger()->debug('Passed descriptor is ' . ($convertedPassedArguments ?: '(none)'));

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

            $this->debugTool->getLogger()->debug('Find descriptor for ' . ($methodSignature ?: '(none)'));

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
}
