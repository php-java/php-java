<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Short;

final class _i2s extends AbstractOperationCode implements OperationCodeInterface
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
        $value = Normalizer::getPrimitiveValue(
            $this->popFromOperandStack()
        );

        $this->pushToOperandStack(_Short::get($value));
    }
}
