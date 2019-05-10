<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\BinaryTool;

final class _lshl implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = $this->popFromOperandStack();
        $value1 = $this->popFromOperandStack();

        $this->pushToOperandStack(BinaryTool::shiftLeft($value1, $value2));
    }
}
