<?php

class JavaStatement_sipush extends JavaStatement {

    public function execute () {

        $this->pushStack($this->getByteCodeStream()->readShort());

    }

}
