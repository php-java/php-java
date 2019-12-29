<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\Int_;

final class _bipush extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $byte = $this->readByte();

        return $this->operands = new Operands(
            ['byte', $byte, ['byte']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $this->pushToOperandStack(Int_::get($this->getOperands()['byte']));
    }
}
