<?php

class JavaStatement_areturn extends JavaStatement {

    public function execute () {
    
        return $this->getStack();

    }

}   
