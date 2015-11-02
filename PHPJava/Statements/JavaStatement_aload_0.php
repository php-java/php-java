<?php

class JavaStatement_aload_0 extends JavaStatement {

    /**
     * load a reference onto the stack from local variable 0
     */
    public function execute () {
        
        $this->pushStack($this->getLocalstorage(0));
        
    }

}   
