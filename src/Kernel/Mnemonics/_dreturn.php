<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;

final class _dreturn extends AbstractOperationCode implements OperationCodeInterface
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
        $value = $this->popFromOperandStack();
        $this->returnValue = ($value instanceof _Double)
            ? $value
            : _Double::get($value);
    }
}
