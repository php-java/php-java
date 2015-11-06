<?php

class JavaStatement_lreturn extends JavaStatement {

    public function execute () {
    
        return new JavaTypeLong($this->getStack());

    }

}   
