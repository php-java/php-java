<?php

class JavaStackMapTableAttribute extends JavaAttribute {
    
    private $NumberOfEntries = null;
    
    private $StackMapFrames = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->NumberOfEntries = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->NumberOfEntries; $i++) {
            
            $this->StackMapFrames[] = new JavaStructureStackMapFrame($Class);
            
            
        }
        
        // $this->AttributeData = new $classAttributeName($Class);
        
        
    }
    
}
    