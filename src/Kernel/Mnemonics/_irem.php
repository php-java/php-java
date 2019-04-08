<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _irem implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        // JVM spec wrote `value1 - (value1 / value2) * value2`
        // But PHP can modulo calculation.

        $rightOperand = Extractor::realValue($this->popFromOperandStack());
        $leftOperand = Extractor::realValue($this->popFromOperandStack());

        $this->pushToOperandStack(
            new _Int(
                $leftOperand % $rightOperand
            )
        );
    }
}
