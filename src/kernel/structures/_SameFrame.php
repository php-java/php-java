<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _SameFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $FrameType = null;
    public function execute(): void
    {
        $this->FrameType = $this->readUnsignedByte();
    }
}
