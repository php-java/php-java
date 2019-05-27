<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigDecimal;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Double;

final class _dneg implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Normalizer::getPrimitiveValue(
            $this->popFromOperandStack()
        );

        $result = (string) BigDecimal::of($value)
            ->multipliedBy(BigDecimal::of(-1));

        $this->pushToOperandStack(_Double::get($result));
    }
}
