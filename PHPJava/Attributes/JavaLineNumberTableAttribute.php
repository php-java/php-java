<?php

class JavaLineNumberTableAttribute extends JavaAttribute {
    
    private $LineNumberTableLength = null;
    private $LineNumberTables = null;
    
    public function __construct (&$Class) {
        
        parent::__construct($Class);
        
        $this->LineNumberTableLength = $this->Class->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->LineNumberTableLength; $i++) {
            
            $this->LineNumberTables[$i] = new JavaStructureLineNumberTable($Class);
            
            $this->LineNumberTables[$i]->setStartPc($this->Class->getJavaBinaryStream()->readUnsignedShort());
            $this->LineNumberTables[$i]->setLineNumber($this->Class->getJavaBinaryStream()->readUnsignedShort());
            
        }
        
    }
    
    public function getLineNumberTables () {
        
        return $this->LineNumberTables;
        
    }
    
    
}