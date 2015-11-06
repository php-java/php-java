<?php

class JavaStatement_areturn extends JavaStatement {

    public function execute () {
    
        return new \java\lang\String((string) $this->getStack());

    }

}   
