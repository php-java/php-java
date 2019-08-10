<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _if_icmple extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
        $offset = $this->readShort();

        $rightOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $leftOperand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($leftOperand <= $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
