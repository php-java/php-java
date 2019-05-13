<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigDecimal;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\Extractor;

final class _dneg implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        $result = (string) BigDecimal::of($value)
            ->multipliedBy(BigDecimal::of(-1));

        $this->pushToOperandStack(_Double::get($result));
    }
}
