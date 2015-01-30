<?php

class JavaStatement_astore_3 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(3, $this->getStack());

    }

}   
