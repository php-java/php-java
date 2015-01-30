<?php

class JavaStatement_ishr extends JavaStatement {

    public function execute () {


        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::shiftRight($value1, $value2, 4));

    }

}
