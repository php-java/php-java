<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\Long_;

final class _lshr extends AbstractOperationCode implements OperationCodeInterface
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
        $value2 = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $result = (string) BigInteger::of($value1)
            ->shiftedRight((int) $value2);

        $this->pushToOperandStack(Long_::get($result));
    }
}
