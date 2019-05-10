<?php
namespace PHPJava\Kernel\Structures;

class _Class implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $classIndex;

    public function execute(): void
    {
        $this->classIndex = $this->readUnsignedShort();
    }

    public function getClassIndex()
    {
        return $this->classIndex;
    }
}
