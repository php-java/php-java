<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _StackMapFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $FrameType = null;
    private $SameFrame = null;
    private $SameLocals1StackItemFrame = null;
    private $SameLocals1StackItemFrameExtended = null;
    private $ChopFrame = null;
    private $SameFrameExtended = null;
    private $AppendFrame = null;
    private $FullFrame = null;
    public function execute(): void
    {
        $this->FrameType = $this->readUnsignedByte();
        // back by frametype
        $this->getClass()->seek(-1);
        if ($this->FrameType >= 0 && $this->FrameType <= 63) {
            $this->SameFrame = new _SameFrame($this->getClass());
        } elseif ($this->FrameType >= 64 && $this->FrameType <= 127) {
            $this->SameLocals1StackItemFrame = new _SameLocals1StackItemFrame($this->getClass());
        } elseif ($this->FrameType == 247) {
            $this->SameLocals1StackItemFrameExtended = new _SameLocals1StackItemFrameExtended($this->getClass());
        } elseif ($this->FrameType >= 248 && $this->FrameType <= 250) {
            $this->ChopFrame = new _ChopFrame($this->getClass());
        } elseif ($this->FrameType == 251) {
            $this->SameFrameExtended = new _SameFrameExtended($this->getClass());
        } elseif ($this->FrameType >= 252 && $this->FrameType <= 254) {
            $this->AppendFrame = new _AppendFrame($this->getClass());
        } elseif ($this->FrameType == 255) {
            $this->FullFrame = new _FullFrame($this->getClass());
        }
    }
}
