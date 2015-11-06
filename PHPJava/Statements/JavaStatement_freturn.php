<?php

class JavaStatement_freturn extends JavaStatement {

    public function execute () {

        return new JavaTypeFloat($this->getStack());

    }

}   
