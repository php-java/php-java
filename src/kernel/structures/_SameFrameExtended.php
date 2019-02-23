<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _SameFrameExtended implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $FrameType = null;
    private $OffsetDelta = null;
    public function execute(): void
    {
        $this->FrameType = $this->readUnsignedByte();
        $this->OffsetDelta = $this->readUnsignedShort();
    }
}

