<?php

class JavaStatement_ixor extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::xorBits($value1, $value2, 4));

    }

}
