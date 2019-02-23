<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class AttributeInfo implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $AttributeNameIndex = null;
    private $AttributeLength = null;
    private $AttributeData = null;
    public function execute(): void
    {
        $this->AttributeNameIndex = $this->readUnsignedShort();
        $this->AttributeLength = $this->readUnsignedInt();
        $cpInfo = $this->getConstantPool()->getEntries();
        $classAttributeName = 'Java' . $cpInfo[$this->AttributeNameIndex]->getString() . 'Attribute';
        $this->AttributeData = new $classAttributeName($Class);
    }
    public function getAttributeData()
    {
        return $this->AttributeData;
    }
    public function getAttributeNameIndex()
    {
        return $this->AttributeNameIndex;
    }
    public function getAttributeLength()
    {
        return $this->AttributeLength;
    }
}
