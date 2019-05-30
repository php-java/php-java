<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Kernel\Types\Type;

final class _sastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = $this->popFromOperandStack();
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        /**
         * @var Type $arrayref
         */
        $arrayref = $this->popFromOperandStack();

        // The value is a ref.
        $arrayref[$index] = _Short::get($value);
    }
}
