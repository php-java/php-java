<?php

class JavaStatement_ireturn extends JavaStatement {

    /***
     * return an integer from a method
     */
    public function execute () {
    
        return new JavaTypeInt($this->getStack());

    }

}   
