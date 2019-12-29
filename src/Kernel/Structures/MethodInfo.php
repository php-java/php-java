<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

class MethodInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $accessFlag;

    /**
     * @var int
     */
    private $nameIndex;

    /**
     * @var int
     */
    private $descriptorIndex;

    /**
     * @var int
     */
    private $attributeCount = 0;

    /**
     * @var \PHPJava\Kernel\Attributes\AttributeInfo[]
     */
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
            $attribute->setDebugTool($this->getDebugTool());
            $attribute->execute();

            $this->attributes[] = $attribute;
        }
    }

    public function getAccessFlag(): int
    {
        return $this->accessFlag;
    }

    public function getNameIndex(): int
    {
        return $this->nameIndex;
    }

    public function getDescriptorIndex(): int
    {
        return $this->descriptorIndex;
    }

    /**
     * @return \PHPJava\Kernel\Attributes\AttributeInfo[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
