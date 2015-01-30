<?php

class JavaStatement_putstatic extends JavaStatement {

    public function execute () {
    
        $cpInfo = $this->getCpInfo();
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];
        
        $class = $cpInfo[$cp->getNameAndTypeIndex()];
        $name = $cpInfo[$class->getNameIndex()]->getString();
        
        $value = $this->getStack();
        
        // set field
        $this->getInvoker()->getClass()->setStatic($name, $value);
        
    }

}   
