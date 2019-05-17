<?php
namespace PHPJava\Packages\PHPJava\Extended;

use PHPJava\Packages\java\lang\CloneNotSupportedException;
use PHPJava\Packages\java\lang\NoSuchMethodException;
use PHPJava\Packages\PHPJava\Kernel\Behavior\System;

trait _Object
{
    private $parameters;

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
     * @throws NoSuchMethodException
     */
    public function __call(string $name, array $arguments)
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

    public function __default_equals($a = null): bool
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
