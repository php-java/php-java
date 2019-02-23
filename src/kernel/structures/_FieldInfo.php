<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _FieldInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $AccessFlag = null;
    private $NameIndex = null;
    private $DescriptorIndex = null;
    private $AttributeCount = 0;
    private $Attributes = array();
    public function execute(): void
    {
        $this->AccessFlag = $this->readUnsignedShort();
        $this->NameIndex = $this->readUnsignedShort();
        $this->DescriptorIndex = $this->readUnsignedShort();
        $this->AttributeCount = $this->readUnsignedShort();
        for ($i = 0; $i < $this->AttributeCount; $i++) {
            $this->Attributes[$i] = new \PHPJava\Kernel\Attributes\AttributeInfo($this->getClass());
        }
    }
    public function getAccessFlag()
    {
        return $this->AccessFlag;
    }
    public function getNameIndex()
    {
        return $this->NameIndex;
    }
    public function getDescriptorIndex()
    {
        return $this->DescriptorIndex;
    }
    public function getAttributes()
    {
        return $this->Attributes;
    }
}
