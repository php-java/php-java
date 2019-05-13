<?php
namespace PHPJava\Kernel\Mnemonics;

use Brick\Math\BigInteger;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\Extractor;

final class _lneg implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        $result = (string) BigInteger::of($value)
            ->multipliedBy(BigInteger::of(-1));

        $this->pushToOperandStack(_Long::get($result));
    }
}
