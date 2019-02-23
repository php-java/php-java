<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _ifeq implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $operand = $this->getStack();

        if ($operand == 0) {
            $this->setOffset($this->getPointer() + $offset);
        }
    }
}
