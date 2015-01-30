<?php

class JavaStatement_aload_3 extends JavaStatement {

    public function execute () {

        $this->pushStack($this->getLocalstorage(3));
        
    }

}   
