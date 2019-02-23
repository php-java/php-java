<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _aaload implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * load onto the stack a reference from an array
     */
    public function execute(): void
    {    
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        if (!isset($arrayref[$index])) {

            throw new JavaArrayIndexOutOfBoundsException($this->getMethodName() . ': ' . $index . ' of array index');
            
        }
        
        $this->pushStack($arrayref[$index]);
        
    }

}   
