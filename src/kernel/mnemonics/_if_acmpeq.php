<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _if_acmpeq implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $leftOperand = $this->getStack();
        $rightOperand = $this->getStack();

        if ($leftOperand === $rightOperand) {
            $this->setOffset($this->getPointer() + $offset);
        }
    }
}
