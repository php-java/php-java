<?php

class JavaStatement_aload extends JavaStatement {

    public function execute () {

        $index = $this->getByteCodeStream()->readByte();

        $this->pushStack($this->getLocalstorage($index));

    }

}
