<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _dmul implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightValue = $this->popFromOperandStack();
        $leftValue = $this->popFromOperandStack();

        $this->pushToOperandStack(
            _Double::get(
                BinaryTool::multiply(
                    Extractor::getRealValue($leftValue),
                    Extractor::getRealValue($rightValue)
                )
            )
        );
    }
}
