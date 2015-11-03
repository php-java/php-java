<?php

class JavaStatement_dload extends JavaStatement {

    /**
     * load a double value from a local variable #index
     */
    public function execute () {
    
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->pushStack($this->getLocalstorage($index));

    }

}   
