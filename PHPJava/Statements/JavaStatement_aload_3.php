<?php

class JavaStatement_aload_3 extends JavaStatement {

    /**
     * load a reference onto the stack from local variable 3
     */
    public function execute () {

        $this->pushStack($this->getLocalstorage(3));
        
    }

}   
