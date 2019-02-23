<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _putstatic implements MnemonicInterface
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
