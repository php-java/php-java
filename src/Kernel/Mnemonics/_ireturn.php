<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Short;

final class _ireturn extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    // return an integer from a method
    public function execute()
    {
        $value = $this->popFromOperandStack();
        $isIntegerValue = $value instanceof _Int ||
            $value instanceof _Char ||
            $value instanceof _Short ||
            $value instanceof _Byte ||
            $value instanceof _Boolean;
        return $isIntegerValue ? $value : _Int::get($value);
    }
}
