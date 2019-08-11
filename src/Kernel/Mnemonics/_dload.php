<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;

final class _dload extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $index = $this->readUnsignedByte();

        return $this->operands = new Operands(
            ['index', $index, ['index']]
        );
    }

    /**
     * load a double value from a local variable #index.
     */
    public function execute(): void
    {
        parent::execute();
        $index = $this->getOperands()['index'];
        $this->pushToOperandStack(
            _Double::get(
                $this->getLocalStorage($index)
            )
        );
    }
}
