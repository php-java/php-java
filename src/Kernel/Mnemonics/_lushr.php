<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Long;

final class _lushr extends AbstractOperationCode implements OperationInterface
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
        $value2 = (int) Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = (int) Normalizer::getPrimitiveValue($this->popFromOperandStack());

        // See: https://stackoverflow.com/questions/14428193/php-unsigned-right-shift-malfunctioning
        $this->pushToOperandStack(
            _Long::get(($value1 >> $value2) & ~(1 << (8 * PHP_INT_SIZE - 1) >> ($value2 - 1)))
        );
    }
}
