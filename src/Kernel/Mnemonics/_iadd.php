<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _iadd implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightValue = $this->popFromOperandStack();
        $leftValue = $this->popFromOperandStack();

        $this->pushToOperandStack(
            new _Int(
                BinaryTool::add(
                    Extractor::getRealValue($leftValue),
                    Extractor::getRealValue($rightValue)
                )
            )
        );
    }
}
