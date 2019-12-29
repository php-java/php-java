<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

final class _istore_0 extends AbstractOperationCode implements OperationCodeInterface
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
        $this->setLocalStorage(0, $this->popFromOperandStack());
    }
}
