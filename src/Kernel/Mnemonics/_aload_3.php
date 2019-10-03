<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload_3 extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
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
