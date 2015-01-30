<?php

class JavaStatement_if_icmplt extends JavaStatement {

    public function execute () {
    
        $offset = $this->getByteCodeStream()->readShort();

        $leftOperand = $this->getStack();
        $rightOperand = $this->getStack();

        if ($rightOperand < $leftOperand) {

            $this->getByteCodeStream()->setOffset($this->getPointer() + $offset);

        }
    }

}   
