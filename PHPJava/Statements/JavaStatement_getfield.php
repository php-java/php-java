<?php

class JavaStatement_getfield extends JavaStatement {

    public function execute () {

        $cpInfo = $this->getCpInfo();

        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $get = $this->getStack();

        $return = $get->getInstance($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString());

        if ($return !== null) {

            $this->pushStack($return);

        } else {

            throw new JavaStatementException('Cannot get ' . $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString() . '');

        }

    }

}
