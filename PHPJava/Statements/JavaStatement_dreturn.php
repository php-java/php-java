<?php

class JavaStatement_dreturn extends JavaStatement {

    public function execute () {
    
        return new JavaTypeDouble($this->getStack());

    }

}   
