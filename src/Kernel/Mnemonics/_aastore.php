<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _aastore extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    /**
     * store into a reference in an array.
     */
    public function execute(): void
    {
        $value = $this->popFromOperandStack();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();
        $arrayref[$index] = $value;
    }
}
