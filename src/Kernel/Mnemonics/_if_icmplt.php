<?php
namespace PHPJava\Kernel\Mnemonics;

final class _if_icmplt implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $rightOperand = $this->popFromOperandStack();
        $leftOperand = $this->popFromOperandStack();

        if ($leftOperand < $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
