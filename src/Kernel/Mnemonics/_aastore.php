<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _aastore extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    /**
     * store into a reference in an array.
     */
    public function execute(): void
    {
        parent::execute();
        $value = $this->popFromOperandStack();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();
        $arrayref[$index] = $value;
    }
}
