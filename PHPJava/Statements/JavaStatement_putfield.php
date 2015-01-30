<?php

class JavaStatement_putfield extends JavaStatement {

    public function execute () {
    
        $cpInfo = $this->getCpInfo();
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];
        
        $value = $this->getStack();
        $name = $cpInfo[$class->getNameIndex()]->getString();
        
        $objectref = $this->getStack();
        
        $objectref->setInstance($name, $value);
    }

}   
