<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _ifeq extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $branchbyte = $this->readShort();

        return $this->operands = new Operands(
            ['branchbyte', $branchbyte, ['branchbyte1', 'branchbyte2']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $offset = $this->getOperands()['branchbyte'];
        $operand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($operand == 0) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
