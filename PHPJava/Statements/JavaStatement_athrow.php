<?php

class JavaStatement_athrow extends JavaStatement {

    public function execute () {

        $cpInfo = $this->getCpInfo();

        $objectref = $this->getStack();

        $className = str_replace('\\', '/', get_class($objectref));

        foreach ($this->getAttributeData()->getExceptionTables() as $exception) {

            if ($cpInfo[$cpInfo[$exception->getCatchType()]->getClassIndex()]->getString() === $className &&
                    $exception->getStartPc() <= $this->getPointer() &&
                    $exception->getEndPc() >= $this->getPointer()) {

                $this->getByteCodeStream()->setOffset($exception->getHandlerPc());
                return;

            }

        }

        throw new JavaStatementException('exception table was broken.');

    }

}
