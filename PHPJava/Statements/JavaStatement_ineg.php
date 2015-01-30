<?php

class JavaStatement_ineg extends JavaStatement {

    public function execute () {

        $value = $this->getStack();

        $this->pushStack(BinaryTools::negate($value, 4));

    }

}
