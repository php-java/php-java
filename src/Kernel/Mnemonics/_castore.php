<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Extractor;

final class _castore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::getRealValue($this->popFromOperandStack());
        $index = Extractor::getRealValue($this->popFromOperandStack());

        /**
         * @var Type $arrayref
         */
        $arrayref = $this->popFromOperandStack();

        // The value is a ref.
        $arrayref[$index] = chr($value);

        $this->pushToOperandStack(
            $arrayref
        );
    }
}
