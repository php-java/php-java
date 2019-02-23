<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _iastore implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {        
        $data = $this->getStack();
        $arrayref = $this->getStack();
        $value = $this->getStack();
        
        $value[$arrayref] = $data;
        
    }

}   
