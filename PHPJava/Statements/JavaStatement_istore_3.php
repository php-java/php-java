<?php

class JavaStatement_istore_3 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(3, $this->getStack());
        
    }

}   
