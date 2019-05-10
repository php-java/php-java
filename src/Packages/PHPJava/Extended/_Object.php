<?php
namespace PHPJava\Packages\PHPJava\Extended;

use PHPJava\Packages\java\lang\CloneNotSupportedException;
use PHPJava\Packages\java\lang\NoSuchMethodException;
use PHPJava\Packages\PHPJava\Kernel\Behavior\System;

trait _Object
{
    private $parameters;

    /**
     * _Object constructor.
     * @param mixed ...$parameters
     */
    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @throws NoSuchMethodException
     */
    public function __destruct()
    {
        $this->finalize();
    }

    /**
     * @param $name
     * @param $arguments
     * @throws NoSuchMethodException
     */
    public function __call($name, $arguments)
    {
        $defaultName = '__default_' . $name;
        if (method_exists($this, $defaultName)) {
            return $this->{$defaultName}(...$arguments);
        }
        throw new NoSuchMethodException($name . ' does not exist on ' . get_class($this));
    }

    public function __default_clone(): void
    {
        throw new CloneNotSupportedException();
    }

    /**
     * @param null $a
     * @return bool
     */
    public function __default_equals($a = null)
    {
        return $this === $a;
    }

    public function __default_getClass(): self
    {
        return $this;
    }

    public function __default_hashCode()
    {
        return System::identityHashCode($this);
    }

    public function __default_notify(): void
    {
        // not implemented.
    }

    public function __default_notifyAll(): void
    {
        // not implemented.
    }

    /**
     * @return string
     */
    public function __default_toString()
    {
        return 'java.lang.Object@PHPJava' . spl_object_hash($this);
    }

    /**
     * @throws NoSuchMethodException
     */
    public function __toString(): string
    {
        return $this->toString();
    }

    public function __default_wait(int $timeout = null, int $nanos = null): void
    {
        // not implemented.
    }

    public function __default_finalize(): void
    {
    }
}
