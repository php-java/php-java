<?php
namespace PHPJava\Kernel\Mnemonics;

final class _arraylength extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $arrayref = $this->popFromOperandStack();
        $this->pushToOperandStack(
            count($arrayref)
        );
    }
}
