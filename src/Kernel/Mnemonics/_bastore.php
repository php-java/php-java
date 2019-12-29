<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Byte;

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
        if ($arrayref->getType() === _Boolean::class) {
            $value = _Boolean::get(
                Normalizer::getPrimitiveValue(
                    $value
                )
            );
        } else {
            $value = _Byte::get(
                Normalizer::getPrimitiveValue(
                    $value
                )
            );
        }

        // The value is a ref.
        $arrayref[$index] = $value;
    }
}
