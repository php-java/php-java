<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aconst_null extends AbstractOperationCode implements OperationCodeInterface
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
     * store into a reference in an array.
     */
    public function execute(): void
    {
        parent::execute();
        $this->pushToOperandStack(null);
    }
}
