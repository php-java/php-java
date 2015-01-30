<?php

class JavaStatement_aload_1 extends JavaStatement {

    public function execute () {
    
        $this->pushStack($this->getLocalstorage(1));
        

    }

}   
