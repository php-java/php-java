<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class AttributeInfo implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $attributeNameIndex = null;
    private $attributeLength = null;
    private $attributeData = null;

    public function execute(): void
    {
        $this->attributeNameIndex = $this->readUnsignedShort();
        $this->attributeLength = $this->readUnsignedInt();
        $cpInfo = $this->getConstantPool()->getEntries();
        $classAttributeName = '\\PHPJava\\Kernel\\Attributes\\' . $cpInfo[$this->attributeNameIndex]->getString() . 'Attribute';
        $this->attributeData = new $classAttributeName($this->reader);
        $this->attributeData->setConstantPool($this->getConstantPool());
        $this->attributeData->execute();
    }
    public function getAttributeData()
    {
        return $this->attributeData;
    }

    public function getAttributeNameIndex()
    {
        return $this->attributeNameIndex;
    }

    public function getAttributeLength()
    {
        return $this->attributeLength;
    }
}
