<?php

class JavaStatement_isub extends JavaStatement {

    public function execute () {

        $leftValue = $this->getStack();
        $rightValue = $this->getStack();

        $this->pushStack(BinaryTools::sub($leftValue, $rightValue, 4));

    }

}
