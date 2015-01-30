<?php

class JavaStatement_i2s extends JavaStatement {

    public function execute () {

        $value = $this->getStack();

        $this->pushStack(base_convert(substr(sprintf('%032s', base_convert($value, 10, 2)), 16), 2, 10));

    }

}
