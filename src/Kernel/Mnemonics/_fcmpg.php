<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Int;

final class _fcmpg extends AbstractOperationCode implements OperationCodeInterface
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
        $rightOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $leftOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($leftOperand > $rightOperand) {
            $this->pushToOperandStack(
                _Int::get(1)
            );
            return;
        }

        if ($leftOperand < $rightOperand) {
            $this->pushToOperandStack(
                _Int::get(-1)
            );
            return;
        }

        $this->pushToOperandStack(
            _Int::get(0)
        );
    }
}
