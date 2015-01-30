<?php

class JavaStructureNameAndType extends JavaStructure {
    
    private $NameIndex = null;
    private $DescriptorIndex = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->NameIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->DescriptorIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
    }
    
    public function getNameIndex () {
        
        return $this->NameIndex;
        
    }
    
    public function getDescriptorIndex () {
        
        return $this->DescriptorIndex;
        
    }
    
}