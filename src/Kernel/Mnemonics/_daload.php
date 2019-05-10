<?php
namespace PHPJava\Kernel\Mnemonics;

final class _daload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a double from an array.
     */
    public function execute(): void
    {
        $index = $this->popFromOperandStack();
        $arrayref = $this->popFromOperandStack();

        $this->pushToOperandStack($arrayref[$index]);
    }
}
