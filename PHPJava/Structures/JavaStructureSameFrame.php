<?php

class JavaStructureSameFrame extends JavaStructure {
    
    private $FrameType = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        
    }
    
}

