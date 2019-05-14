<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\Extractor;

final class _lcmp implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = (string) Extractor::getRealValue($this->popFromOperandStack());
        $value1 = (string) Extractor::getRealValue($this->popFromOperandStack());

        $compare = BigInteger::of($value1)->compareTo($value2);

        if ($compare == 1) {
            $this->pushToOperandStack(_Int::get(1));
            return;
        }

        if ($compare == -1) {
            $this->pushToOperandStack(_Int::get(-1));
            return;
        }

        $this->pushToOperandStack(_Int::get(0));
    }
}
