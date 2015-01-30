<?php

class JavaAttribute {
    
    protected $Class = null;
    
    public function __construct (&$Class) {
        
        $this->Class = &$Class;
        
    }
    
    public function getClass () {
        
        return $this->Class;
        
    }
    
}