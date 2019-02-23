<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _putfield implements MnemonicInterface
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
