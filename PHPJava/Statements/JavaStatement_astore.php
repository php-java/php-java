<?php

class JavaStatement_astore extends JavaStatement {

    public function execute () {
    
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->setLocalstorage($index, $this->getStack());

    }

}   
