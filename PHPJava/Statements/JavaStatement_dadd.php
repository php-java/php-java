<?php

class JavaStatement_dadd extends JavaStatement {

    public function execute () {
    
        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::add($value1, $value2, 8));
        
    }

}   
