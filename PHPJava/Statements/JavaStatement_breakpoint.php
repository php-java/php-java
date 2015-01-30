<?php

class JavaStatement_breakpoint extends JavaStatement {

    public function execute () {
    
        throw new JavaStatementException(__CLASS__ . ' hasnot statement.');

    }

}   
