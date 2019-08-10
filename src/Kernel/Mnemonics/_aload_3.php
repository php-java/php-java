<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload_3 extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    /**
     * load a reference onto the stack from local variable 3.
     */
    public function execute(): void
    {
        parent::execute();
        $index = 3;
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
