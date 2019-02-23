<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _aload_0 implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load a reference onto the stack from local variable 0
     */
    public function execute(): void
    {        
        $this->pushStack($this->getLocalstorage(0));
        
    }

}   
