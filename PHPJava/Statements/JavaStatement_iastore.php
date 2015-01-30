<?php

class JavaStatement_iastore extends JavaStatement {

    public function execute () {
        
        $data = $this->getStack();
        $arrayref = $this->getStack();
        $value = $this->getStack();
        
        $value[$arrayref] = $data;
        
    }

}   
