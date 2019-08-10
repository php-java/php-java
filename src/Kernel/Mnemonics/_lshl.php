<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Long;

final class _lshl extends AbstractOperationCode implements OperationInterface
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
        parent::execute();
        $value2 = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $result = (string) BigInteger::of($value1)
            ->shiftedLeft((int) $value2);

        $this->pushToOperandStack(_Long::get($result));
    }
}
