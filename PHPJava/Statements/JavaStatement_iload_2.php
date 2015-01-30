<?php

class JavaStatement_iload_2 extends JavaStatement {

    public function execute () {
    
        $this->pushStack($this->getLocalstorage(2));
        
    }

}   
