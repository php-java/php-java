<?php

class JavaStatement_laload extends JavaStatement {

    /**
     * load a long from an array
     */
    public function execute () {
    
        $index = $this->getStack();
        $arrayref = $this->getStack();

        $this->pushStack($arrayref[$index]);
        
    }

}   
