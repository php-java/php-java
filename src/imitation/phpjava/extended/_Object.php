<?php
namespace PHPJava\Imitation\PHPJava\Extended;

use PHPJava\Imitation\java\lang\NoSuchMethodException;

trait _Object
{
    public function __construct(...$parameters)
    {
    }

    public function __call($name, $arguments)
    {
        throw new NoSuchMethodException($name . ' does not exist on ' . get_class($this));
    }

    public function clone(): _Object
    {
        return clone $this;
    }


    public function equals($object): bool
    {
        return $this === $object;
    }

    public function getClass(): self
    {
        return $this;
    }

    public function hashCode(): int
    {
        if (version_compare(PHP_VERSION, '7.2', '<')) {
            return crc32(spl_object_hash($this));
        }
        return spl_object_id($this);
    }

    public function notify(): void
    {
        // not implemented.
    }

    public function notifyAll(): void
    {
        // not implemented.
    }

    public function toString(): string
    {
        return 'java.lang.Object@PHPJava' . spl_object_hash($this);
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function wait(int $timeout = null, int $nanos = null): void
    {
        // not implemented.
    }
}
