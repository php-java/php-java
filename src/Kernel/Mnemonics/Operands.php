<?php
namespace PHPJava\Kernel\Mnemonics;

final class Operands implements \ArrayAccess
{
    private $operands = [];

    public function __construct(array $operands = [])
    {
        $this->operands = $operands;
    }

    public function count()
    {
        return count($this->operands);
    }

    public function offsetExists($offset)
    {
        return isset($this->operands[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->operands[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->operands[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->operands[$offset]);
        $this->operands = array_values($this->operands);
    }
}
