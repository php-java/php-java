<?php

class JavaStatement_aload_2 extends JavaStatement {

    /**
     * load a reference onto the stack from local variable 2
     */
    public function execute () {

        $this->pushStack($this->getLocalstorage(2));
        
    }

}   
