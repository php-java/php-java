<?php

class JavaStatement_daload extends JavaStatement {

    /**
     * load a double from an array
     */
    public function execute () {
    
        $index = $this->getStack();
        $arrayref = $this->getStack();

        $this->pushStack($arrayref[$index]);

    }

}   
