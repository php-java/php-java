<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\ValidatorException;

final class AttributeInfo implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $attributeNameIndex;

    /**
     * @var int
     */
    private $attributeLength;

    /**
     * @var AttributeInterface
     */
    private $attributeData;

    /**
     * @throws ValidatorException
     */
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

    public function getAttributeData(): ?AttributeInterface
    {
        return $this->attributeData;
    }

    public function getAttributeNameIndex(): int
    {
        return $this->attributeNameIndex;
    }

    public function getAttributeLength(): int
    {
        return $this->attributeLength;
    }
}
