<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _putfield implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {    
        $cpInfo = $this->getCpInfo();
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];
        
        $value = $this->getStack();
        $name = $cpInfo[$class->getNameIndex()]->getString();
        
        $objectref = $this->getStack();
        
        $objectref->setInstance($name, $value);
    }

}   
