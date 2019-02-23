<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _ifeq implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $offset = $this->getByteCodeStream()->readShort();

        $operand = $this->getStack();

        if ($operand == 0) {

            $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);

        }


    }

}   
