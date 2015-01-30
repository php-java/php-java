<?php

class JavaStatement_tableswitch extends JavaStatement {

    public function execute () {

        $key = $this->getStack();

        $paddingData = $this->getByteCodeStream()->readByte() + $this->getByteCodeStream()->readByte() + $this->getByteCodeStream()->readByte();

        $offsets = array();

        $offsets['default'] = $this->getByteCodeStream()->readInt();

        $lowByte = $this->getByteCodeStream()->readInt();
        $highByte = $this->getByteCodeStream()->readInt();

        for ($i = $lowByte; $i <= $highByte; $i++) {

            $offsets[$i] = $this->getByteCodeStream()->readInt();

        }

        if (isset($offsets[$key])) {

            // goto PC
            $this->getByteCodeStream()->setOffset($this->getPointer() + $offsets[$key]);
            return;

        }

        // goto default
        $this->getByteCodeStream()->setOffset($this->getPointer() + $offsets['default']);

    }

}
