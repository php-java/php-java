<?php
namespace PHPJava\Kernel\Frames;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class SameLocals1StackItemFrameExtended implements FrameInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $frameType = null;
    private $offsetDelta = null;
    private $locals = [];
    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
        $local = new \PHPJava\Kernel\Structures\_VerificationTypeInfo($this->reader);
        $local->execute();
        $this->locals[] = $local;
    }
}
