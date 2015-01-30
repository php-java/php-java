<?php

class JavaStatement_lsub extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::sub($value1, $value2, 8));

    }

}
