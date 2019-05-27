<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Float;

final class _fadd implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = (float) Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = (float) Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->pushToOperandStack(_Float::get($value1 + $value2));
    }
}
