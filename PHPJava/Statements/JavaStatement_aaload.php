<?php

class JavaStatement_aaload extends JavaStatement {

    public function execute () {
    
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        if (!isset($arrayref[$index])) {
            
            throw new JavaArrayIndexOutOfBoundsException($this->getMethodName() . ': ' . $index . ' of array index');
            
        }
        
        $this->pushStack($arrayref[$index]);
        
    }

}   
