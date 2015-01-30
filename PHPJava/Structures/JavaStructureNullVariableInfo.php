<?php

class JavaStructureNullVariableInfo extends JavaStructure {

    private $Tag = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->Tag = $Class->getJavaBinaryStream()->readUnsignedByte();
        
    }
    
}