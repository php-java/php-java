<?php
namespace PHPJava\Kernel\Types\_Array;

use PHPJava\Exceptions\TypeException;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Extractor;
use PHPJava\Utilities\TypeResolver;

class Collection implements \ArrayAccess, \Countable, \IteratorAggregate
{
    private $data;
    private $position = 0;

    public function __construct(array &$data, string $type = null)
    {
        $this->data = $data;
    }

    public function getType($default = null): ?string
    {
        if (!isset($this->data[0])) {
            return $default;
        }
        return TypeResolver::resolveFromPHPType(
            Extractor::realValue($this->data[0])
        ) ?? $default;
    }

    public function __toString()
    {
        return implode($this->data);
    }

    public function toArray()
    {
        return $this->data;
    }

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function count()
    {
        return count($this->data);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }
}
