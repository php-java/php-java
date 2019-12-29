<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\Array_\Collection;
use PHPJava\Kernel\Types\Boolean_;
use PHPJava\Kernel\Types\Byte_;

final class _bastore extends AbstractOperationCode implements OperationCodeInterface
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
        $value = $this->popFromOperandStack();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        /**
         * @var Collection $arrayref
         */
        $arrayref = $this->popFromOperandStack();
        if ($arrayref->getType() === Boolean_::class) {
            $value = Boolean_::get(
                Normalizer::getPrimitiveValue(
                    $value
                )
            );
        } else {
            $value = Byte_::get(
                Normalizer::getPrimitiveValue(
                    $value
                )
            );
        }

        // The value is a ref.
        $arrayref[$index] = $value;
    }
}
