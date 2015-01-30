<?php

class JavaStatement_istore extends JavaStatement {

    public function execute () {

        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->setLocalstorage($index, $this->getStack());

    }

}   
