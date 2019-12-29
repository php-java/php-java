<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\Float_;

final class _fload extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

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

    public function execute(): void
    {
        parent::execute();
        $index = $this->getOperands()['index'];
        $this->pushToOperandStack(
            Float_::get(
                $this->getLocalStorage($index)
            )
        );
    }
}
