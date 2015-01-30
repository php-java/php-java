<?php

class JavaLocalVariableTableAttribute extends JavaAttribute {

    private $LocalVariableTableLength;
    private $LocalVariableTables = array();

    public function __construct (&$Class) {

        parent::__construct($Class);

        $this->LocalVariableTableLength = $this->Class->getJavaBinaryStream()->readUnsignedShort();

        for ($i = 0; $i < $this->LocalVariableTableLength; $i++) {

            $this->LocalVariableTables[] = new JavaStructureLocalVariableTable($Class);

        }

    }

}