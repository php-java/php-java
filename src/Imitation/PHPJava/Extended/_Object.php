<?php
namespace PHPJava\Imitation\PHPJava\Extended;

use PHPJava\Imitation\java\lang\NoSuchMethodException;

trait _Object
{
    private $parameters;

    public function __construct(...$parameters)
    {
        $this->parameters = $parameters;
    }

    public function __destruct()
    {
        $this->finalize();
    }

    public function __call($name, $arguments)
    {
        $defaultName = '__default_' . $name;
        if (method_exists($this, $defaultName)) {
            return $this->{$defaultName}(...$arguments);
        }
        throw new NoSuchMethodException($name . ' does not exist on ' . get_class($this));
    }

    public function __default_clone(): _Object
    {
        return clone $this;
    }

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
        if (version_compare(PHP_VERSION, '7.2', '<')) {
            return crc32(spl_object_hash($this));
        }
        return spl_object_id($this);
    }

    public function __default_notify(): void
    {
        // not implemented.
    }

    public function __default_notifyAll(): void
    {
        // not implemented.
    }

    public function __default_toString()
    {
        return 'java.lang.Object@PHPJava' . spl_object_hash($this);
    }

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
