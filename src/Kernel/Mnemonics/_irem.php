<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Int;

final class _irem implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        // JVM spec wrote `value1 - (value1 / value2) * value2`
        // But PHP can modulo calculation.

        $rightOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $leftOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->pushToOperandStack(
            _Int::get(
                $leftOperand % $rightOperand
            )
        );
    }
}
