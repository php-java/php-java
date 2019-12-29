<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Short;

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
        $isIntegerValue = $value instanceof _Int ||
            $value instanceof _Char ||
            $value instanceof _Short ||
            $value instanceof _Byte ||
            $value instanceof _Boolean;
        $this->returnValue = $isIntegerValue ? $value : _Int::get($value);
    }
}
