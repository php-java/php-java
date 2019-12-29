<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Packages\java\lang\NoSuchMethodException;

trait PHPMethodFindable
{
    protected function findMethod(string $name): \ReflectionMethod
    {
        if (!isset($this->methods[$name])) {
            throw new NoSuchMethodException(
                'Call to undefined method ' . $name . ' on ' . $this->javaClassInvoker->getJavaClass()->getClassName() . '.'
            );
        }

        return $this->methods[$name][0];
    }
}
