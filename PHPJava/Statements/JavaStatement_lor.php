<?php

class JavaStatement_lor extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::orBits($value1, $value2, 8));

    }

}
