<?php
namespace PHPJava\Kernel\Mnemonics;

final class _istore_2 extends AbstractOperationCode implements OperationCodeInterface
{
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
        $this->setLocalStorage(2, $this->popFromOperandStack());
    }
}
