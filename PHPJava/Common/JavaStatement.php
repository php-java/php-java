<?php

class JavaStatement {

    private $MethodName = null;
    private $ByteCodeStream = null;
    private $Stacks = null;
    private $Localstorage = null;

    private $Operands = array();
    private $CpInfo = array();
    private $Pointer = null;

    private $Invoker;

    public function __construct ($methodName, &$invoker, &$byteCodeStream, &$stacks, &$localstorage, &$CpInfo, &$attributeData, $pointer) {

        $this->MethodName = $methodName;
        $this->Invoker = &$invoker;
        $this->ByteCodeStream = &$byteCodeStream;
        $this->Stacks = &$stacks;
        $this->Localstorage = &$localstorage;
        $this->CpInfo = &$CpInfo;
        $this->AttributeData = &$attributeData;
        $this->Pointer = $pointer;

    }

    public function pushStack ($value) {

        $this->Stacks[] = $value;

    }

    public function pushStackByReference (&$value) {

        $this->Stacks[] = &$value;

    }

    public function dupStack () {

        $this->pushStack($this->Stacks[sizeof($this->Stacks) - 1]);

    }

    public function getStack () {

        return array_pop($this->Stacks);

    }

    public function popStack () {

        array_pop($this->Stacks);

    }

    public function getStacks () {

        return $this->Stacks;

    }

    public function getOperands () {

        return $this->Operands;

    }

    public function setLocalstorage ($index, $value) {

        $this->Localstorage[(int) $index] = $value;

    }


    public function getLocalstorage ($index) {

        return $this->Localstorage[(int) $index];

    }

    public function getLocalstorages () {

        return $this->Localstorage;

    }

    public function getByteCodeStream () {

        return $this->ByteCodeStream;

    }

    public function getPointer () {

        return $this->Pointer;

    }

    public function getCpInfo () {

        return $this->CpInfo;

    }

    public function getInvoker () {

        return $this->Invoker;

    }

    public function getMethodName () {

        return $this->MethodName;

    }

    public function getAttributeData () {

        return $this->AttributeData;

    }

}