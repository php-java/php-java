<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Float;

final class _freturn extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute()
    {
        $value = $this->popFromOperandStack();
        return ($value instanceof _Float)
            ? $value
            : _Float::get($value);
    }
}
