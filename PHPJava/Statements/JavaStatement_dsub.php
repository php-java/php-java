<?php

class JavaStatement_dsub extends JavaStatement {

    public function execute () {
    
        $leftValue = $this->getStack();
        $rightValue = $this->getStack();

        $this->pushStack(BinaryTools::sub($leftValue, $rightValue, 8));

    }

}   
