<?php

class JavaStructureLong extends JavaStructure {

    // private $HighBytes = null;
    // private $LowBytes = null;

    private $Bytes = 0;

    public function __construct (&$Class) {

        parent::__construct($Class);

        //$this->HighBytes = $Class->getJavaBinaryStream()->readUnsignedInt();
        //$this->LowBytes = $Class->getJavaBinaryStream()->readUnsignedInt();

        $this->Bytes = $Class->getJavaBinaryStream()->readLong();

    }

    public function getBytes () {

        //return ($this->HighBytes << 32) + $this->LowBytes;
        return $this->Bytes;

    }

}
