<?php
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Exceptions\UndefinedOpCodeException;

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

        $method = $this->findMethod($name);

        $this->debugTool->getLogger()->debug('Call method: ' . $name);

        if ($this->isDynamic() && $this->javaClassInvoker->getClassObject() === null) {
            $this->javaClassInvoker->construct();
        }

        $executed = $method
            ->invokeArgs(
                $this->isDynamic() ? $this->javaClassInvoker->getClassObject() : null,
                $arguments
            );

        $this->debugTool->getLogger()->debug('Finish operation: ' . $name);

        return $executed;
    }
}
