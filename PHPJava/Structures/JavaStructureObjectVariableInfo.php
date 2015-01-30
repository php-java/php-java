<?php

class JavaStructureObjectVariableInfo extends JavaStructure {
    
    private $Tag = null;
    private $cpoolIndex = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->Tag = $Class->getJavaBinaryStream()->readUnsignedByte();
        $this->cpoolIndex = $Class->getJavaBinaryStream()->readUnsignedShort();
        
    }
    
}