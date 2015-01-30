<?php

class JavaStatement_iushr extends JavaStatement {

    public function execute () {

        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTools::unsignedShiftRight($value1, $value2, 4));

    }

}
