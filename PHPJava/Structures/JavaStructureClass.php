<?php

class JavaStructureClass extends JavaStructure {
    
    private $ClassIndex = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->ClassIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
    }
    
    public function getClassIndex () {
        
        return $this->ClassIndex;
        
    }
    
    
}