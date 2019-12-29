<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Char_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Short_;

final class _ireturn extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    // return an integer from a method
    public function execute(): void
    {
        parent::execute();
        $value = $this->popFromOperandStack();
        $isIntegerValue = $value instanceof Int_ ||
            $value instanceof Char_ ||
            $value instanceof Short_ ||
            $value instanceof Byte_ ||
            $value instanceof _Boolean;
        $this->returnValue = $isIntegerValue ? $value : Int_::get($value);
    }
}
