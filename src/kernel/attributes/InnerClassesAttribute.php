<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;

final class InnerClassesAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    
    private $NumberOfClasses = 0;
    private $Classes = array();
    
    public function execute(): void
    {
        
        
        
        $this->NumberOfClasses = $this->getJavaBinaryStream()->readUnsignedShort();
        
        for ($i = 0; $i < $this->NumberOfClasses; $i++) {
            
            $thises[$i] = new JavaStructureClasses($this);
            
            $thises[$i]->setInnerClassInfoIndex($this->getJavaBinaryStream()->readUnsignedShort());
            $thises[$i]->setOuterClassInfoIndex($this->getJavaBinaryStream()->readUnsignedShort());
            $thises[$i]->setInnerNameIndex($this->getJavaBinaryStream()->readUnsignedShort());
            $thises[$i]->setInnerClassAccessFlag($this->getJavaBinaryStream()->readUnsignedShort());
            
        }
        
    }
    
    public function getClasses () {
        
        return $thises;
        
    }
    
}