<?php

class JavaStatement_ldc2_w extends JavaStatement {

    public function execute () {
    
        $cpInfo = $this->getCpInfo();

        $data = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $this->pushStack($data->getBytes());    
        
    }

}   
