<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Extractor;

final class _bastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = $this->popFromOperandStack();
        $index = Extractor::getRealValue($this->popFromOperandStack());

        /**
         * @var Type $arrayref
         */
        $arrayref = $this->popFromOperandStack();

        // The value is a ref.
        $arrayref[$index] = $value;

        $this->pushToOperandStack(
            $arrayref
        );
    }
}
