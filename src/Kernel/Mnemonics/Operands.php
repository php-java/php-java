<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\OperationException;

final class Operands implements \ArrayAccess, \Countable
{
    private $operands = [];

    public function __construct(...$operands)
    {
        foreach ($operands as [$alias, $value, $operandNames]) {
            $this->operands[$alias] = [$value, $operandNames];
        }
    }

    public function count()
    {
        return count($this->getInfo());
    }

    public function getInfo(): array
    {
        $operands = [];
        foreach ($this->operands as [, $operandParameters]) {
            array_push($operands, ...$operandParameters);
        }
        return $operands;
    }

    public function getElements(): array
    {
        return $this->operands;
    }

    public function offsetExists($offset)
    {
        return isset($this->operands[$offset]);
    }

    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new OperationException('Does not exist an operand.');
        }
        return $this->operands[$offset][0];
    }

    public function offsetSet($offset, $value)
    {
        throw new OperationException('Operands class is not supported overwrite.');
    }

    public function offsetUnset($offset)
    {
        throw new OperationException('Operands class is not supported unset an element.');
    }
}
