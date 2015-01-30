<?php

class JavaStructureSameFrameExtended extends JavaStructure {
    
    private $FrameType = null;
    private $OffsetDelta = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        $this->OffsetDelta = $Class->getJavaBinaryStream()->readUnsignedShort();
        
        
    }
    
}

