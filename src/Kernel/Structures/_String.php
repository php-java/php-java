<?php
namespace PHPJava\Kernel\Structures;

class _String implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $stringIndex;

    public function execute(): void
    {
        $this->stringIndex = $this->readUnsignedShort();
    }

    public function getStringIndex()
    {
        return $this->stringIndex;
    }
}
