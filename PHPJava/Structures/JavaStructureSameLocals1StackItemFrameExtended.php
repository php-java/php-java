<?php

class JavaStructureSameLocals1StackItemFrameExtended extends JavaStructure {

    private $FrameType = null;
    private $OffsetDelta = null;
    private $Locals = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        $this->OffsetDelta = $Class->getJavaBinaryStream()->readUnsignedShort();
        
        $this->Locals[] = new JavaStructureVarificationTypeInfo($Class);
        
    }
    
}

