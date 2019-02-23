<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _dastore implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * store a double into an array
     */
    public function execute(): void
    {    
        $value = $this->getStack();        
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $arrayref[$index] = $value;
        
    }

}   
