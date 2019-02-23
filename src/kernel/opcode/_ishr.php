<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _ishr implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTool::shiftRight($value1, $value2, 4));

    }

}
