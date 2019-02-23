<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _if_icmpgt implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->getByteCodeStream()->readShort();

        $leftOperand = $this->getStack();
        $rightOperand = $this->getStack();

        if ($leftOperand < $rightOperand) {
            $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);
        }
    }
}
