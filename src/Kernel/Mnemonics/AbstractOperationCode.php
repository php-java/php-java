<?php
namespace PHPJava\Kernel\Mnemonics;

abstract class AbstractOperationCode implements OperationInterface
{
    /**
     * @var null|Operands
     */
    protected $operands;

    protected $returnValue;

    /**
     * @var bool
     */
    protected $isExecuted = false;

    public function getOperands(): ?Operands
    {
        return $this->operands ?? null;
    }

    public function execute(): void
    {
        $this->isExecuted = true;
    }

    public function returnValue()
    {
        return $this->returnValue;
    }

    public function isExecuted(): bool
    {
        return $this->isExecuted;
    }
}
