<?php

class JavaStructureFloat extends JavaStructure {
   
    private $Bytes = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->Bytes = $Class->getJavaBinaryStream()->readUnsignedInt();
        
    }
    
    public function getBytes () {
        
        return $this->Bytes;
        
    }
    
}
