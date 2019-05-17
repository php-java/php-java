<?php
namespace PHPJava\Kernel\Types\_Array;

use PHPJava\Packages\java\lang\ArrayIndexOutOfBoundsException;
use PHPJava\Utilities\Extractor;
use PHPJava\Utilities\TypeResolver;

class Collection implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var string
     */
    private $type;

    public function __construct(array &$data = [])
    {
        $this->data = $data;
    }

    public function setType(string $type = null): self
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

    public function __toString(): string
    {
        return implode($this->data);
    }

    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    /**
     * @param int $offset
     */
    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new ArrayIndexOutOfBoundsException($offset);
        }
        return $this->data[$offset];
    }

    /**
     * @param int $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    /**
     * @param int $offset
     */
    public function offsetSet($offset, $value)
    {
        if ($offset === null) {
            $this->data[] = $value;
            return;
        }
        $this->data[$offset] = $value;
    }

    /**
     * @return $offset
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }
}
