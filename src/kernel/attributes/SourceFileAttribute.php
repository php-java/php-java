<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;

final class SourceFileAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    
    private $SourceFileIndex = null;
    
    public function execute(): void
    {
        
        
        
        $this->SourceFileIndex = $this->getJavaBinaryStream()->readUnsignedShort();
        
        
    }
    
    public function getSourceFileIndex () {
        
        return $this->SourceFileIndex;
        
    }
    
    
}
