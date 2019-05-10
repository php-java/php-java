<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _iaload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = Extractor::getRealValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();

        $this->pushToOperandStack(
            $arrayref[$index]
        );
    }
}
