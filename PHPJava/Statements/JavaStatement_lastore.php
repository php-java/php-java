<?php

class JavaStatement_lastore extends JavaStatement {

    /**
     * store a long to an array
     */
    public function execute () {
    
        $value = $this->getStack();        
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $arrayref[$index] = $value;
        
    }

}   
