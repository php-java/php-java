<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    /**
     * load a reference onto the stack from a local variable #index.
     */
    public function execute(): void
    {
        parent::execute();
        $index = $this->readByte();
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
