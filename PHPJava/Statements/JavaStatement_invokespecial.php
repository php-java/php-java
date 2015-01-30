<?php

class JavaStatement_invokespecial extends JavaStatement {

    public function execute () {
            
        $cpInfo = $this->getCpInfo();
        
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        // $invokeClassName = '\\' . str_replace('/', '\\', $cpList[$class->getClassIndex()]->getString());

        
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        
        // signature
        $signature = JavaClass::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());
        
        $invokeClassName = $this->getStack();

        $arguments = array();

        for ($i = 0; $i < $signature['argumentsCount']; $i++) {

            $arguments[] = $this->getStack();

        }
        
        
    }

}   
