<?php

class JavaStatement_istore_2 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(2, $this->getStack());
        
    }

}   
