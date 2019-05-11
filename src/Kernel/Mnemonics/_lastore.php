<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _lastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * store a long to an array.
     */
    public function execute(): void
    {
        $value = $this->popFromOperandStack();
        $index = Extractor::getRealValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();

        $arrayref[$index] = $value;
    }
}
