<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;

final class _iconst_4 extends AbstractOperationCode implements OperationCodeInterface
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
        $this->pushToOperandStack(_Int::get(4));
    }
}
