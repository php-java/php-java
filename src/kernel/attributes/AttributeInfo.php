<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class AttributeInfo implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $AttributeNameIndex = null;
    private $AttributeLength = null;
    private $AttributeData = null;
    public function execute(): void
    {
        
        $this->AttributeNameIndex = $this->readUnsignedShort();
        $this->AttributeLength = $this->readUnsignedInt();
        $cpInfo = $this->getCpInfo();
        $classAttributeName = 'Java' . $cpInfo[$this->AttributeNameIndex]->getString() . 'Attribute';
        $this->AttributeData = new $classAttributeName($Class);
    }
    public function getAttributeData () {
        return $this->AttributeData;
    }
    public function getAttributeNameIndex () {
        return $this->AttributeNameIndex;
    }
    public function getAttributeLength () {
        return $this->AttributeLength;
    }
}
