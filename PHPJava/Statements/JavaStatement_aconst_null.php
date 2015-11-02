<?php

class JavaStatement_aconst_null extends JavaStatement {

    /**
     * store into a reference in an array
     */
    public function execute () {

        $this->pushStack(null);
        
    }

}   
