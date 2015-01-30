<?php

class JavaStructureInteger extends JavaStructure {

    private $Bytes = null;

    public function __construct (&$Class) {

        parent::__construct($Class);

        $this->Bytes = $Class->getJavaBinaryStream()->readInt();


    }

    public function getBytes () {

        return $this->Bytes;

    }

}
