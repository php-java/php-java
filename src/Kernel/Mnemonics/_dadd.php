<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigDecimal;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\Extractor;

final class _dadd implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = Extractor::getRealValue($this->popFromOperandStack());
        $value1 = Extractor::getRealValue($this->popFromOperandStack());

        $result = (string) BigDecimal::of($value1)
            ->plus(BigDecimal::of($value2));

        $this->pushToOperandStack(_Double::get($result));
    }
}
