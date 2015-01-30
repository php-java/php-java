<?php

class JavaStatement_invokevirtual extends JavaStatement {

    public function execute () {

        $cpInfo = $this->getCpInfo();

        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();

        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];

        // signature
        $signature = JavaClass::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());

        $arguments = array();

        for ($i = 0; $i < $signature['argumentsCount']; $i++) {

            $arguments[] = $this->getStack();

        }

        $invokerClass = $this->getStack();

        if ($invokerClass instanceof \JavaClass) {

            $result = call_user_func_array(array(

                $invokerClass->getMethodInvoker(),
                $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()

            ), $arguments);


        } else {

            // load platform
            $this->getInvoker()->loadPlatform($class);

            $invokeClassName = '\\' . str_replace('/', '\\', $class);
            
            $result = call_user_func_array(array(

                $invokerClass,
                $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()

            ), $arguments);

            // empty to array
            // $stacks = array();


        }

        if ($signature[0]['type'] !== 'void') {

            $this->pushStack($result);

        }


    }

}
