<?php

class JavaStatement_astore_1 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(1, $this->getStack());

    }

}   
