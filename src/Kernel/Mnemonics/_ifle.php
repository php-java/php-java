<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _ifle extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

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
        $value = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($value <= 0) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
