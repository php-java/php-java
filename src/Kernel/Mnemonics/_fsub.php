<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Float;
use PHPJava\Utilities\Extractor;

final class _fsub implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = (float) Extractor::getRealValue($this->popFromOperandStack());
        $value1 = (float) Extractor::getRealValue($this->popFromOperandStack());

        $this->pushToOperandStack(_Float::get($value1 - $value2));
    }
}
