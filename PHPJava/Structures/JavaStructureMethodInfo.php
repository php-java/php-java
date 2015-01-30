<?php

class JavaStructureMethodInfo extends JavaStructure {
    
    private $AccessFlag = null;
    private $NameIndex = null;
    private $DescriptorIndex = null;
    private $AttributeCount = 0;
    private $Attributes = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->AccessFlag = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->NameIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->DescriptorIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        $this->AttributeCount = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->AttributeCount; $i++) {
            
            $this->Attributes[$i] = new JavaAttributeInfo($Class);
            
        }
        
    }
    
    public function getAccessFlag () {
        
        return $this->AccessFlag;
        
    }
    
    public function getNameIndex () {
        
        return $this->NameIndex;
        
    }
    
    public function getDescriptorIndex () {
        
        return $this->DescriptorIndex;
        
    }
    
    public function getAttributes () {
        
        return $this->Attributes;
        
    }
    
    
}