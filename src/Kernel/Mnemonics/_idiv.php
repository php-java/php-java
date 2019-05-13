<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\Extractor;

final class _idiv implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = (int) Extractor::getRealValue($this->popFromOperandStack());
        $value1 = (int) Extractor::getRealValue($this->popFromOperandStack());

        $this->pushToOperandStack(_Int::get((int) ($value1 / $value2)));
    }
}
