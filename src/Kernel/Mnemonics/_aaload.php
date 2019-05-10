<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _aaload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load onto the stack a reference from an array.
     */
    public function execute(): void
    {
        $index = Extractor::getRealValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();

        $this->pushToOperandStack(
            $arrayref[$index]
        );
    }
}
