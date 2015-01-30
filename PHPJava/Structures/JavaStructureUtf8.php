<?php

class JavaStructureUtf8 extends JavaStructure {

    private $Length = 0;
    private $String = '';

    public function __construct (&$Class) {

        parent::__construct($Class);

        $this->Length = $this->Class->getJavaBinaryStream()->readUnsignedShort();

        for ($i = 0; $i < $this->Length; $i++) {

            $this->String .= chr($this->Class->getJavaBinaryStream()->readUnsignedByte());

        }

    }

    public function getLength () {

        return $this->Length;

    }

    public function getString () {

        return $this->String;

    }

}