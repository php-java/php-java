<?php

class JavaStatement_aload_2 extends JavaStatement {

    public function execute () {

        $this->pushStack($this->getLocalstorage(2));
        
    }

}   
