<?php

class JavaStatement_istore_1 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(1, $this->getStack());
        
    }

}   
