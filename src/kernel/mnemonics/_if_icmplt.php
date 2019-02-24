<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _if_icmplt implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $leftOperand = $this->getStack();
        $rightOperand = $this->getStack();

        if ($rightOperand < $leftOperand) {
            $this->setOffset($this->getPointer() + $offset);
        }
    }
}
