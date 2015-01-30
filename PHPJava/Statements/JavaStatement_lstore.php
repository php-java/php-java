<?php

class JavaStatement_lstore extends JavaStatement {

    public function execute () {

        $index = $this->getByteCodeStream()->readUnsignedByte();
        $this->setLocalstorage($index, $this->getStack());
        
    }

}
