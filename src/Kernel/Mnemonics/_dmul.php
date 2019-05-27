<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigDecimal;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Double;

final class _dmul implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $result = (string) BigDecimal::of($value1)
            ->multipliedBy(BigDecimal::of($value2));

        $this->pushToOperandStack(_Double::get($result));
    }
}
