<?php

class JavaStatement_lmul extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::multiply($value1, $value2, 8));

    }

}
