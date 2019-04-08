<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _iastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $data = $this->popFromOperandStack();
        $arrayref = $this->popFromOperandStack();
        $value = $this->popFromOperandStack();
        
        $value[$arrayref] = $data;
    }
}
