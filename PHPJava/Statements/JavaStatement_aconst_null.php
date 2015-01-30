<?php

class JavaStatement_aconst_null extends JavaStatement {

    public function execute () {
    
        throw new JavaStatementException(__CLASS__ . ' hasnot statement.');

    }

}   
