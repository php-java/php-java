<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _putstatic implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $cpInfo = $this->getCpInfo();
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];
        
        $class = $cpInfo[$cp->getNameAndTypeIndex()];
        $name = $cpInfo[$class->getNameIndex()]->getString();
        
        $value = $this->getStack();
        
        // set field
        $this->getInvoker()->getClass()->setStatic($name, $value);
        
    }

}   
