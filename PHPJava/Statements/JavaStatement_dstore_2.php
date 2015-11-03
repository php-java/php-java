<?php

class JavaStatement_dstore_2 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(2, $this->getStack());

    }

}   
