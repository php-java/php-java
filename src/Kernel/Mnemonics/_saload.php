<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _saload extends AbstractOperationCode implements OperationCodeInterface
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
        parent::execute();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();

        $this->pushToOperandStack(
            $arrayref[$index]
        );
    }
}
