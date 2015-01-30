<?php

class JavaStructureDouble extends JavaStructure {
   
    private $HighBytes = null;
    private $LowBytes = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->HighBytes = $Class->getJavaBinaryStream()->readUnsignedInt();
        $this->LowBytes = $Class->getJavaBinaryStream()->readUnsignedInt();
        
    }
    
    public function getBytes () {
        
        return ($this->HighBytes << 32) + $this->LowBytes;
        
    }
    
}
