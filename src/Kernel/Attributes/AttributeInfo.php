<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Structures\_Methodref;
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
        $currentOffset = $this->getOffset();
        $classAttributeName = '\\PHPJava\\Kernel\\Attributes\\' . $cpInfo[$this->attributeNameIndex]->getString() . 'Attribute';
        $this->attributeData = new $classAttributeName($this->reader);
        $this->attributeData->setConstantPool($this->getConstantPool());
        $this->attributeData->execute();
        if ($this->attributeLength != ($actual = $this->getOffset() - $currentOffset)) {
            throw new ValidatorException(
                'Invalid attribute counter. expect number is ' .
                $this->attributeLength .
                ', but actual number is ' . $actual . '.'
            );
        }
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
