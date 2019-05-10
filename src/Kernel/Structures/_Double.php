<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Utilities\BinaryTool;

class _Double implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $highBytes;
    private $lowBytes;

    public function execute(): void
    {
        $this->highBytes = $this->readUnsignedInt();
        $this->lowBytes = $this->readUnsignedInt();
    }

    public function getBytes()
    {
        return BinaryTool::convertDoubleToIEEE754(
            ($this->highBytes << 32) + $this->lowBytes
        );
    }
}
