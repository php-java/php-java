<?php

class JavaStatement_goto extends JavaStatement {

    public function execute () {

        $offset = $this->getByteCodeStream()->readShort();

        $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);

    }

}   
