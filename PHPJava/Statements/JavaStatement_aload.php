<?php

class JavaStatement_aload extends JavaStatement {

    /**
     * load a reference onto the stack from a local variable #index
     */
    public function execute () {

        $index = $this->getByteCodeStream()->readByte();

        $this->pushStack($this->getLocalstorage($index));

    }

}
