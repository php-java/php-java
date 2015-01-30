<?php

class JavaInvoker {
    
    private $Class = null;
    
    private $Platform = null;
    
    private $Loaded = array();
    
    public function __construct (JavaClass &$Class) {
        
        $this->Class = &$Class;
        $this->Platform = __DIR__ . '/../Platform';
        
    }
    
    public function getClass () {
        
        return $this->Class;
        
    }
    
    public function loadInnerClass ($class) {
        
        if ($this->getClass()->getClassFile() . '/../' . $class . '.class') {
            
            $this->Loaded[] = str_replace('.', '/', $class);
            
            
        }
        
    }
    
    public function loadPlatform ($class) {
        
        $className = str_replace('.', '/', $class);
        
        if (is_file($this->Platform . '/' . $className . '.php')) {
            
            if (in_array($className, $this->Loaded)) {
                
                return;
            }
            
            require_once $this->Platform . '/' . $className . '.php';
            
            $this->Loaded[] = str_replace('.', '/', $class);
            
        } else {
            
            throw new JavaPlatformHasNotClass($class);
            
        }
        
    }
    
}