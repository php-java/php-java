<?php

class JavaStatement_aaload extends JavaStatement {

    /**
     * load onto the stack a reference from an array
     */
    public function execute () {
    
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        if (!isset($arrayref[$index])) {

            throw new JavaArrayIndexOutOfBoundsException($this->getMethodName() . ': ' . $index . ' of array index');
            
        }
        
        $this->pushStack($arrayref[$index]);
        
    }

}   
