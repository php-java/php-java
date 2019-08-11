<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Int;

final class _isub extends AbstractOperationCode implements OperationCodeInterface
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
        $value2 = (int) Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = (int) Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->pushToOperandStack(_Int::get($value1 - $value2));
    }
}
