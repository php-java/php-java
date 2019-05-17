<?php
namespace PHPJava\Kernel\Structures;

class _InvokeDynamic implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $bootstrapMethodAttrIndex = 0;

    /**
     * @var int
     */
    private $nameAndTypeIndex = 0;

    public function execute(): void
    {
        $this->bootstrapMethodAttrIndex = $this->readUnsignedShort();
        $this->nameAndTypeIndex = $this->readUnsignedShort();
    }

    public function getBootstrapMethodAttrIndex(): int
    {
        return $this->bootstrapMethodAttrIndex;
    }

    public function getNameAndTypeIndex(): int
    {
        return $this->nameAndTypeIndex;
    }
}
