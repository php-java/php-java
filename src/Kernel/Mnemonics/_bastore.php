<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Byte;

final class _bastore extends AbstractOperationCode implements OperationInterface
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
        $value = $this->popFromOperandStack();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        /**
         * @var Collection $arrayref
         */
        $arrayref = $this->popFromOperandStack();
        if ($arrayref->getType() === 'boolean') {
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
