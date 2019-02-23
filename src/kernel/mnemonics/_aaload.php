<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _aaload implements MnemonicInterface
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
