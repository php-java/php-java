<?php

class JavaStructureString extends JavaStructure {
    
    private $StringIndex = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->StringIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
    }
    
    public function getStringIndex () {
        
        return $this->StringIndex;
        
    }
    
}