<?php

class JavaStructureLineNumberTable extends JavaStructure {
    
    private $StartPc = null;
    private $LineNumber = null;
    
    public function setStartPc ($StartPc) {
        
        $this->StartPc = $StartPc;
        
    }
    
    public function setLineNumber ($LineNumber) {
        
        $this->LineNumber = $LineNumber;
        
    }
    
    public function getStartPc () {
        
        return $this->StartPc;
        
    }
    
    public function getLineNumber () {
        
        return $this->LineNumber;
        
    }
    
}