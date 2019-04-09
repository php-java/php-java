<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _iastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $data = Extractor::realValue($this->popFromOperandStack());
        $arrayref = Extractor::realValue($this->popFromOperandStack());

        /**
         * @var Type $value
         */
        $value = $this->popFromOperandStack();

        // The value is a ref.
        $value[$arrayref] = $data;

        $this->pushToOperandStack(
            $value
        );
    }
}
