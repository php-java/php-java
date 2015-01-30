<?php

class JavaStructureMethodref extends JavaStructure {
    
    private $ClassIndex = null;
    private $NameAndTypeIndex = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->ClassIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->NameAndTypeIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
    }
    
    public function getClassIndex () {
        
        return $this->ClassIndex;
        
    }
    
    public function getNameAndTypeIndex () {
        
        return $this->NameAndTypeIndex;
        
    }
    
}