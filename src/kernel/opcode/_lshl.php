<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _lshl implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTool::shiftLeft($value1, $value2, 8));
    }
}