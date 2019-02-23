<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _FieldInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $AccessFlag = null;
    private $NameIndex = null;
    private $DescriptorIndex = null;
    private $AttributeCount = 0;
    private $Attributes = array();
    public function execute(): void
    {
        $this->AccessFlag = $this->Class->readUnsignedShort();
        $this->NameIndex = $this->Class->readUnsignedShort();
        $this->DescriptorIndex = $this->Class->readUnsignedShort();
        $this->AttributeCount = $this->Class->readUnsignedShort();
        for ($i = 0; $i < $this->AttributeCount; $i++) {
            $this->Attributes[$i] = new JavaAttributeInfo($this->getClass());
        }
    }
    public function getAccessFlag () {
        return $this->AccessFlag;
    }
    public function getNameIndex () {
        return $this->NameIndex;
    }
    public function getDescriptorIndex () {
        return $this->DescriptorIndex;
    }
    public function getAttributes () {
        return $this->Attributes;
    }
}
