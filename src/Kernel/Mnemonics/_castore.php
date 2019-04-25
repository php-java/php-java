<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _castore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value = Extractor::realValue($this->popFromOperandStack());
        $index = Extractor::realValue($this->popFromOperandStack());

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
