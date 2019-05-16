<?php
namespace PHPJava\Kernel\Types\_Array;

use PHPJava\Packages\java\lang\ArrayIndexOutOfBoundsException;
use PHPJava\Utilities\Extractor;
use PHPJava\Utilities\TypeResolver;

class Collection implements \ArrayAccess, \Countable, \IteratorAggregate
{
    private $data;
    private $position = 0;
    private $type;

    public function __construct(array &$data = [])
    {
        $this->data = $data;
    }

    public function setType(string $type = null)
    {
        $this->type = $type;
        return $this;
    }

    public function getType($default = null): ?string
    {
        if (!isset($this->data[0])) {
            return $this->type ?? $default;
        }
        return TypeResolver::resolveFromPHPType(
            Extractor::getRealValue($this->data[0])
        ) ?? $this->type ?? $default;
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
        if (!$this->offsetExists($offset)) {
            throw new ArrayIndexOutOfBoundsException($offset);
        }
        return $this->data[$offset];
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->data[] = $value;
            return;
        }
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
