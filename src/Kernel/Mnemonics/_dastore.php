<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _dastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * store a double into an array
     */
    public function execute(): void
    {
        $value = $this->popFromOperandStack();
        $index = $this->popFromOperandStack();
        $arrayref = $this->popFromOperandStack();
        
        $arrayref[$index] = $value;
    }
}
