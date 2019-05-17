<?php
namespace PHPJava\Kernel\Structures;

class _NameAndType implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $nameIndex;

    /**
     * @var int
     */
    private $descriptorIndex;

    public function execute(): void
    {
        $this->nameIndex = $this->readUnsignedShort();
        $this->descriptorIndex = $this->readUnsignedShort();
    }

    public function getNameIndex(): int
    {
        return $this->nameIndex;
    }

    public function getDescriptorIndex(): int
    {
        return $this->descriptorIndex;
    }
}
