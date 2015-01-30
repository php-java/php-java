<?php

class JavaCodeAttribute extends JavaAttribute {

    private $MaxStack = null;
    private $MaxLocals = null;
    private $CodeLength = null;
    private $RawCode = '';
    private $Code = array();
    private $ExceptionTableLength = null;
    private $ExceptionTables = array();

    private $AttributeInfo = array();

    public function __construct (&$Class) {

        parent::__construct($Class);

        $this->MaxStack = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->MaxLocals = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->CodeLength = $this->Class->getJavaBinaryStream()->readUnsignedInt();

        // read opcode
        $this->Code = array();

        for ($i = 0; $i < $this->CodeLength; $i++) {

            $this->Code[$i] = $this->Class->getJavaBinaryStream()->readUnsignedByte();
            $this->RawCode .= chr($this->Code[$i]);

        }

        // read exception table
        $this->ExceptionTableLength = $this->Class->getJavaBinaryStream()->readUnsignedShort();

        for ($i = 0; $i < $this->ExceptionTableLength; $i++) {

            $this->ExceptionTables[$i] = new JavaStructureExceptionTable($this->Class);

            $this->ExceptionTables[$i]->setStartPc($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->ExceptionTables[$i]->setEndPc($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->ExceptionTables[$i]->setHandlerPc($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->ExceptionTables[$i]->setCatchType($this->Class->getJavaBinaryStream()->readUnsignedShort());

        }

        $this->AttributesCount = $this->Class->getJavaBinaryStream()->readUnsignedShort();

        for ($i = 0; $i < $this->AttributesCount; $i++) {

            $this->AttributeInfo[] = new JavaAttributeInfo($this->Class);

        }

    }

    public function getExceptionTables () {

        return $this->ExceptionTables;

    }

    public function getCode () {

        return $this->RawCode;

    }

    public function getOpCodes () {

        return $this->Code;

    }

    public function getOpCodeLength () {

        return $this->CodeLength;

    }

}