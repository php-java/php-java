<?php

class JavaStatement_invokestatic extends JavaStatement {

    public function execute () {
    
        $cpInfo = $this->getCpInfo();
        
        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];
        
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();
        
        $signature = JavaClass::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());
        
        $arguments = array();
        
        for ($i = 0; $i < $signature['argumentsCount']; $i++) {
            
            $arguments[] = $this->getStack();
            
        }
        
        krsort($arguments);
        
        // call invoker
        $return = call_user_func_array(array(
            $this->getInvoker(),
            $methodName
        ), $arguments);
        
        if ($signature[0]['type'] !== 'void') {
            
            $this->pushStack($return);
            
        }

    }

}   
