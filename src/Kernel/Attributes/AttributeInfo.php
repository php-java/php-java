<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Structures\_Methodref;
use PHPJava\Utilities\BinaryTool;

final class AttributeInfo implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    private $attributeNameIndex = null;
    private $attributeLength = null;
    private $attributeData = null;

    public function execute(): void
    {
        $loadAttributes = GlobalOptions::get('load_attributes') ?? Runtime::LOAD_ATTRIBUTES;

        $this->attributeNameIndex = $this->readUnsignedShort();
        $this->attributeLength = $this->readUnsignedInt();
        $cpInfo = $this->getConstantPool();
        $currentOffset = $this->getOffset();

        $attributeName = $cpInfo[$this->attributeNameIndex]->getString();

        if ($loadAttributes !== null && !in_array($attributeName, $loadAttributes, true)) {
            $this->read($this->attributeLength);
            $this->getDebugTool()->getLogger()->debug('Skip to load an attribute: ' . $attributeName);
            return;
        }

        $classAttributeName = '\\PHPJava\\Kernel\\Attributes\\' . $attributeName . 'Attribute';
        $this->getDebugTool()->getLogger()->debug('Load an attribute: ' . $attributeName);
        $this->attributeData = new $classAttributeName($this->reader);
        $this->attributeData->setConstantPool($this->getConstantPool());
        $this->attributeData->setDebugTool($this->getDebugTool());
        $this->attributeData->setAttributeReference($this);
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
