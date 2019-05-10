<?php
namespace PHPJava\Kernel\Structures;

class _Long implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $bytes = 0;

    public function execute(): void
    {
        $this->bytes = $this->readLong();
    }

    public function getBytes()
    {
        return $this->bytes;
    }
}
