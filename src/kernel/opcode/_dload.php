<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _dload implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a double value from a local variable #index
     */
    public function execute(): void
    {    
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->pushStack($this->getLocalstorage($index));

    }

}   
