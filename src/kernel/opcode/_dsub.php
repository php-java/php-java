<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _dsub implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $leftValue = $this->getStack();
        $rightValue = $this->getStack();

        $this->pushStack(BinaryTool::sub($leftValue, $rightValue, 8));
    }
}
