<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Exceptions\UndefinedOpCodeException;
use PHPJava\Kernel\Resolvers\MethodNameResolver;

trait PHPMethodCallable
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

        $realPHPMethodName = MethodNameResolver::resolve($name);

        /**
         * @var \ReflectionMethod $method
         */
        $method = $this->findMethod($name);

        $suffix = ($realPHPMethodName !== $name ? ' (Actual calling is the ' . $realPHPMethodName . ' method)' : '');
        $this->debugTool->getLogger()->debug(
            'Call method: ' . $name . $suffix
        );

        if ($this->isDynamic() && MethodNameResolver::isConstructorMethod($name)) {
            $this->javaClassInvoker->construct(...$arguments);
            return $this->javaClassInvoker->getJavaClass();
        }

        $classObject = $this->javaClassInvoker->getClassObject();
        if ($this->isDynamic() && $classObject === null) {
            throw new RuntimeException(
                'Failed to call the method because the given JavaClass does not have ClassObject.'
            );
        }

        $executed = $method
            ->invokeArgs(
                $this->isDynamic()
                    ? $classObject
                    : null,
                $arguments
            );

        $this->debugTool->getLogger()->debug(
            'Finish operation: ' . $name . $suffix
        );

        return $executed;
    }
}
