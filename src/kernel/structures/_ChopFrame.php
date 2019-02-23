<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _ChopFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $frameType = null;
    private $offsetDelta = null;
    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
    }
}
