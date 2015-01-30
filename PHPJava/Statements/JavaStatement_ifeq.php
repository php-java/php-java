<?php

class JavaStatement_ifeq extends JavaStatement {

    public function execute () {
    
        $offset = $this->getByteCodeStream()->readShort();

        $operand = $this->getStack();

        if ($operand == 0) {

            $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);

        }


    }

}   
