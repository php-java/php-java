<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class AttributeInfo implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $AttributeNameIndex = null;
    private $AttributeLength = null;
    private $AttributeData = null;
    public function execute(): void
    {
        $this->AttributeNameIndex = $this->getCurrentClass()->readUnsignedShort();
        $this->AttributeLength = $this->getCurrentClass()->readUnsignedInt();
        $cpInfo = $this->getCurrentClass()->getCpInfo();
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
