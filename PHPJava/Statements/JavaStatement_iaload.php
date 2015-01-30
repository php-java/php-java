<?php

class JavaStatement_iaload extends JavaStatement {

    public function execute () {
    
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $this->pushStack($arrayref[$index]);

    }

}   
