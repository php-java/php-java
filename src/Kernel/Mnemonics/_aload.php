<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $index = $this->readByte();

        return $this->operands = new Operands(
            ['index', $index, ['index']]
        );
    }

    /**
     * load a reference onto the stack from a local variable #index.
     */
    public function execute(): void
    {
        parent::execute();
        $index = $this->getOperands()['index'];
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
