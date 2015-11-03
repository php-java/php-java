<?php

class JavaStatement_dastore extends JavaStatement {

    /**
     * store a double into an array
     */
    public function execute () {
    
        $value = $this->getStack();        
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $arrayref[$index] = $value;
        
    }

}   
