<?php

class JavaStructureAppendFrame extends JavaStructure {
    
    private $FrameType = null;
    private $OffsetDelta = null;
    private $Locals = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        $this->OffsetDelta = $Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0, $s = $this->FrameType - 251; $i < $s; $i++) {
            
            $this->Locals[] = new JavaStructureVarificationTypeInfo($Class);
            
        }
        
    }
    
}

