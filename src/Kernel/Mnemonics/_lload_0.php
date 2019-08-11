<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;

final class _lload_0 extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $this->pushToOperandStack(
            _Long::get(
                $this->getLocalStorage(0)
            )
        );
    }
}
