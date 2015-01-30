<?php

class JavaStructureUninitializedVariableInfo extends JavaStructure {

    private $Tag = null;
    private $Offset = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->Tag = $Class->getJavaBinaryStream()->readUnsignedByte();
        $this->Offset = $Class->getJavaBinaryStream()->readUnsignedShort();
        
    }
    
}