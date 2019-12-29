<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\Float_;

final class _fdiv extends AbstractOperationCode implements OperationCodeInterface
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
        $value2 = (float) Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = (float) Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->pushToOperandStack(Float_::get($value1 / $value2));
    }
}
