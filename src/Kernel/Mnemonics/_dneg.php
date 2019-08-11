<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigDecimal;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Double;

final class _dneg extends AbstractOperationCode implements OperationCodeInterface
{
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
        $value = Normalizer::getPrimitiveValue(
            $this->popFromOperandStack()
        );

        $result = (string) BigDecimal::of($value)
            ->multipliedBy(BigDecimal::of(-1));

        $this->pushToOperandStack(_Double::get($result));
    }
}
