<?php

class JavaStatement_lload extends JavaStatement {

    public function execute () {

        $index = $this->getByteCodeStream()->readUnsignedByte();

        $this->pushStack($this->getLocalstorage($index));

    }

}
