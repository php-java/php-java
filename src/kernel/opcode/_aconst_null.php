<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _aconst_null implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * store into a reference in an array
     */
    public function execute(): void
    {
        $this->pushStack(null);
        
    }

}   
