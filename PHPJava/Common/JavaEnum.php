<?php

class JavaEnum {
    
    public function getName ($value) {
        
        $reflectionClass = new ReflectionClass($this);
        
        $constants = $reflectionClass->getConstants();
        
        $keys = array_keys($constants);
        $values = array_values($constants);
        
        foreach ($values as $i => $constantValue) {
            
            if ($value === $constantValue) {
                
                return $keys[$i];
                
            }
            
        }
        
        return null;
        
    }
    
    public function getValues () {
        
        $reflectionClass = new ReflectionClass($this);
        
        return array_values($reflectionClass->getConstants());
        
    }
    
}
