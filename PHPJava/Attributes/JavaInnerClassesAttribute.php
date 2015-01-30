<?php

class JavaInnerClassesAttribute extends JavaAttribute {
    
    private $NumberOfClasses = 0;
    private $Classes = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->NumberOfClasses = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->NumberOfClasses; $i++) {
            
            $this->Classes[$i] = new JavaStructureClasses($this->Class);
            
            $this->Classes[$i]->setInnerClassInfoIndex($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->Classes[$i]->setOuterClassInfoIndex($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->Classes[$i]->setInnerNameIndex($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->Classes[$i]->setInnerClassAccessFlag($this->Class->getJavaBinaryStream()->readUnsignedShort());
            
        }
        
    }
    
    public function getClasses () {
        
        return $this->Classes;
        
    }
    
}