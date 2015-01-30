<?php

class JavaStatement_iinc extends JavaStatement {

    public function execute () {
        
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $const = $this->getByteCodeStream()->readByte();

        $this->setLocalstorage($index, $this->getLocalstorage($index) + $const);

    }

}   
