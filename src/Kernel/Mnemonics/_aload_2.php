<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

final class _aload_2 extends AbstractOperationCode implements OperationCodeInterface
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
     * load a reference onto the stack from local variable 2.
     */
    public function execute(): void
    {
        parent::execute();
        $index = 2;
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
