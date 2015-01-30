<?php

class JavaStructureFullFrame extends JavaStructure {
    
    private $FrameType = null;
    private $OffsetDelta = null;
    private $NumberOfLocals = null;
    private $NumberOfStackItems = null;
    
    private $Locals = array();
    private $Stack = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        $this->OffsetDelta = $Class->getJavaBinaryStream()->readUnsignedShort();
        $this->NumberOfLocals = $Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->NumberOfLocals; $i++) {
            
            $this->Locals[] = new JavaStructureVarificationTypeInfo($Class);
       
        }
        
        $this->NumberOfStackItems = $Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->NumberOfStackItems; $i++) {
            
            $this->Stack[] = new JavaStructureVarificationTypeInfo($Class);
        
        }
        
    }
    
}

