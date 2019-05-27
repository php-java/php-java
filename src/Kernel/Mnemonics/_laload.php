<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _laload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a long from an array.
     */
    public function execute(): void
    {
        $index = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $arrayref = $this->popFromOperandStack();

        $this->pushToOperandStack($arrayref[$index]);
    }
}
