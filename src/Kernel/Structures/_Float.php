<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Utilities\BinaryTool;

class _Float implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $bytes;

    public function execute(): void
    {
        $this->bytes = $this->readUnsignedInt();
    }

    public function getBytes()
    {
        return BinaryTool::convertFloatToIEEE754($this->bytes);
    }
}
