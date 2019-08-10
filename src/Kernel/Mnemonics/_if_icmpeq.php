<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _if_icmpeq extends AbstractOperationCode implements OperationCodeInterface
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

    public function execute(): void
    {
        parent::execute();
        $offset = $this->readShort();

        $rightOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $leftOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($leftOperand == $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
