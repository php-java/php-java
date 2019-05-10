<?php
namespace PHPJava\Kernel\Structures;

class _Methodref implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $classIndex;
    private $nameAndTypeIndex;

    public function execute(): void
    {
        $this->classIndex = $this->readUnsignedShort();
        $this->nameAndTypeIndex = $this->readUnsignedShort();
    }

    public function getClassIndex()
    {
        return $this->classIndex;
    }

    public function getNameAndTypeIndex()
    {
        return $this->nameAndTypeIndex;
    }
}
