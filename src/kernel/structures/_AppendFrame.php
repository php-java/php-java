<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _AppendFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $FrameType = null;
    private $OffsetDelta = null;
    private $Locals = array();
    public function execute(): void
    {
        $this->FrameType = $this->readUnsignedByte();
        $this->OffsetDelta = $this->readUnsignedShort();
        for ($i = 0, $s = $this->FrameType - 251; $i < $s; $i++) {
            $this->Locals[] = new _VerificationTypeInfo($this->getClass());
        }
    }
}
