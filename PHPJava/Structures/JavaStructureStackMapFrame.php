<?php

class JavaStructureStackMapFrame extends JavaStructure {
    
    private $FrameType = null;
    
    private $SameFrame = null;
    private $SameLocals1StackItemFrame = null;
    private $SameLocals1StackItemFrameExtended = null;
    private $ChopFrame = null;
    private $SameFrameExtended = null;
    private $AppendFrame = null;
    private $FullFrame = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        
        // back by frametype
        $Class->getJavaBinaryStream()->seek(-1);
        
        if ($this->FrameType >= 0 && $this->FrameType <= 63) {
        
            $this->SameFrame = new JavaStructureSameFrame($Class);
        
        } else if ($this->FrameType >= 64 && $this->FrameType <= 127) {
        
            $this->SameLocals1StackItemFrame = new JavaStructureSameLocals1StackItemFrame($Class);
        
        } else if ($this->FrameType == 247) {
        
            $this->SameLocals1StackItemFrameExtended = new JavaStructureSameLocals1StackItemFrameExtended($Class);
        
        } else if ($this->FrameType >= 248 && $this->FrameType <= 250) {
        
            $this->ChopFrame = new JavaStructureChopFrame($Class);
        
        } else if ($this->FrameType == 251) {
        
            $this->SameFrameExtended = new JavaStructureSameFrameExtended($Class);
        
        } else if ($this->FrameType >= 252 && $this->FrameType <= 254) {
            
            $this->AppendFrame = new JavaStructureAppendFrame($Class);
        
        } else if ($this->FrameType == 255) {
            
            $this->FullFrame = new JavaStructureFullFrame($Class);
            
        }
        
    }
    
}