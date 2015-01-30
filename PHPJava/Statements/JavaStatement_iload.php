<?php

class JavaStatement_iload extends JavaStatement {

    public function execute () {

        $index = $this->getByteCodeStream()->readUnsignedByte();

        $this->pushStack($this->getLocalstorage($index));
        
    }

}   
