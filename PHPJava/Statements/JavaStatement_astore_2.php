<?php

class JavaStatement_astore_2 extends JavaStatement {

    public function execute () {
    
        $this->setLocalstorage(2, $this->getStack());
        
    }

}   
