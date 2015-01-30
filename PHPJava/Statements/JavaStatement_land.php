<?php

class JavaStatement_land extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::andBits($value1, $value2, 8));

    }

}
