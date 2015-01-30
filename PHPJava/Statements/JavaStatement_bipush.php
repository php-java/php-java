<?php

class JavaStatement_bipush extends JavaStatement {

    public function execute () {

        $this->pushStack($this->getByteCodeStream()->readByte());

    }

}
