<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\Extractor;

final class _lmul implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = Extractor::getRealValue($this->popFromOperandStack());
        $value1 = Extractor::getRealValue($this->popFromOperandStack());

        $result = (string) BigInteger::of($value1)
            ->multipliedBy(BigInteger::of($value2));

        $this->pushToOperandStack(_Long::get($result));
    }
}
