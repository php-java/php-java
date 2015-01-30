<?php

class JavaStatement_lshl extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::shiftLeft($value1, $value2, 8));

    }

}
