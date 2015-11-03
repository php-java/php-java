<?php

class JavaStatement_dstore extends JavaStatement {

    /**
     * store a double value into a local variable #index
     */
    public function execute () {
    
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->setLocalstorage($index, $this->getStack());
        
    }

}   
