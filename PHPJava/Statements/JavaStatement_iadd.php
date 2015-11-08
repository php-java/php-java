<?php

class JavaStatement_iadd extends JavaStatement {

    public function execute () {

        $leftValue = $this->getStack();
        $rightValue = $this->getStack();
        
        $this->pushStack(BinaryTools::add($leftValue, $rightValue, 4));

    }

}
