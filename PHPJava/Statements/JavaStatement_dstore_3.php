<?php

class JavaStatement_dstore_3 extends JavaStatement {

    public function execute () {

        $this->setLocalstorage(3, $this->getStack());

    }

}   
