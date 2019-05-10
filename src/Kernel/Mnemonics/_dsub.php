<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\BinaryTool;

final class _dsub implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightValue = $this->popFromOperandStack();
        $leftValue = $this->popFromOperandStack();

        $this->pushToOperandStack(BinaryTool::sub($leftValue, $rightValue, 8));
    }
}
