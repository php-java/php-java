<?php

class JavaStructureExceptionTable extends JavaStructure {
    
    private $StartPc = null;
    private $EndPc = null;
    private $HandlerPc = null;
    private $CatchType = null;
    
    public function setStartPc ($StartPc) {
        
        $this->StartPc = $StartPc;
        
    }
    
    public function setEndPc ($EndPc) {
        
        $this->EndPc = $EndPc;
        
    }
    
    public function setHandlerPc ($HandlerPc) {
        
        $this->HandlerPc = $HandlerPc;
        
    }
    
    public function setCatchType ($CatchType) {
        
        $this->CatchType = $CatchType;
        
    }
    public function getStartPc () {
        
        return $this->StartPc;
        
    }
    
    public function getEndPc () {
        
        return $this->EndPc;
        
    }
    
    public function getHandlerPc () {
        
        return $this->HandlerPc;
        
    }
    
    public function getCatchType () {
        
        return $this->CatchType;
        
    }
    
}