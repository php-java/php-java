<?php

class JavaStatement_newarray extends JavaStatement {

    public function execute () {
    
        $atype = $this->getByteCodeStream()->readUnsignedByte();
        $count = $this->getStack();
        
        // need reference
        $ref = new ArrayIterator(array_fill(0, $count, null));
        $this->pushStackByReference($ref);
        

    }

}   
