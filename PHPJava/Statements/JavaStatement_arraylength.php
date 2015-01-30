<?php

class JavaStatement_arraylength extends JavaStatement {

    public function execute () {
    
        $arrayref = $this->getStack();
        
        $this->pushStack(sizeof($arrayref));

    }

}   
