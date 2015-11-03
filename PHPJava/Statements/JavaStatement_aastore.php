<?php

class JavaStatement_aastore extends JavaStatement {

    /**
     * store into a reference in an array
     */
    public function execute () {

        $value = $this->getStack();        
        $index = $this->getStack();
        $arrayref = $this->getStack();
        
        $arrayref[$index] = $value;
        
    }

}   
