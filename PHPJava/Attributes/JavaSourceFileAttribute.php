<?php

class JavaSourceFileAttribute extends JavaAttribute {
    
    private $SourceFileIndex = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->SourceFileIndex = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
        
    }
    
    public function getSourceFileIndex () {
        
        return $this->SourceFileIndex;
        
    }
    
    
}