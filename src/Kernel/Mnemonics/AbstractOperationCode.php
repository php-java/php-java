<?php
namespace PHPJava\Kernel\Mnemonics;

abstract class AbstractOperationCode implements OperationInterface
{
    /**
     * @var null|Operands
     */
    protected $operands;

    public function getOperands(): ?Operands
    {
        return $this->operands ?? null;
    }

    abstract public function execute(): void;

    public function returnValue()
    {
        return null;
    }
}
