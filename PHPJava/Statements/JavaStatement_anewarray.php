<?php

class JavaStatement_anewarray extends JavaStatement {

    /**
     * create a new array of references of length count and component
     * type identified by the class reference index (indexbyte1 << 8 + indexbyte2)
     * in the constant pool
     */
    public function execute () {
    
        // 配列のサイズを調べる (PHPでは不要なので実行するだけ)
        $this->getByteCodeStream()->readUnsignedShort();
        
        // 空の配列を渡す (nullで埋める)
        $count = $this->getStack();
        // need reference
        $ref = new ArrayIterator(array_fill(0, $count, null));
        $this->pushStackByReference($ref);
        
    }

}   
