<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _MethodInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $accessFlag = null;
    private $nameIndex = null;
    private $descriptorIndex = null;
    private $attributeCount = 0;
    private $attributes = [];

    public function execute(): void
    {
        $this->accessFlag = $this->readUnsignedShort();
        $this->nameIndex = $this->readUnsignedShort();
        $this->descriptorIndex = $this->readUnsignedShort();
        $this->attributeCount = $this->readUnsignedShort();
        for ($i = 0; $i < $this->attributeCount; $i++) {
            $attribute = new \PHPJava\Kernel\Attributes\AttributeInfo($this->reader);
            $attribute->setConstantPool($this->getConstantPool());
            $attribute->execute();

            $this->attributes[] = $attribute;
        }
    }
    public function getAccessFlag()
    {
        return $this->accessFlag;
    }
    public function getNameIndex()
    {
        return $this->nameIndex;
    }
    public function getDescriptorIndex()
    {
        return $this->descriptorIndex;
    }
    public function getAttributes()
    {
        return $this->attributes;
    }
}
