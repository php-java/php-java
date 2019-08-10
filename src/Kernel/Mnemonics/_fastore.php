<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\Type;

final class _fastore extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
        $value = $this->popFromOperandStack();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        /**
         * @var Type $arrayref
         */
        $arrayref = $this->popFromOperandStack();

        // The value is a ref.
        $arrayref[$index] = _Float::get($value);
    }
}
