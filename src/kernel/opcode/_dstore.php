<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _dstore implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * store a double value into a local variable #index
     */
    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $value = $this->getStack();
        
        $this->setLocalstorage($index, BinaryTool::convertDoubleToIEEE754($value));
    }
}
