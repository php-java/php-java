<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;

final class _goto_w extends AbstractOperationCode implements OperationCodeInterface
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
        throw new NotImplementedException(__CLASS__);
    }
}
