<?php

class JavaStatement_aload_1 extends JavaStatement {

    /**
     * load a reference onto the stack from local variable 1
     */
    public function execute () {
    
        $this->pushStack($this->getLocalstorage(1));
        

    }

}   
