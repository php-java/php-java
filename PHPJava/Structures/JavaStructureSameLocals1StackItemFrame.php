<?php

class JavaStructureSameLocals1StackItemFrame extends JavaStructure {
    
    private $FrameType = null;
    private $Stack = array();
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->FrameType = $Class->getJavaBinaryStream()->readUnsignedByte();
        
        $this->Stack[] = new JavaStructureVarificationTypeInfo($Class);
        
    }
    
}

