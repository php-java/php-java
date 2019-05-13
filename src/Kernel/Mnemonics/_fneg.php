<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Float;
use PHPJava\Utilities\Extractor;

final class _fneg implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(_Float::get($value * (float) -1));
    }
}
