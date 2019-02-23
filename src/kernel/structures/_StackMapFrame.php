<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _StackMapFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $frameType = null;
    private $sameFrame = null;
    private $sameLocals1StackItemFrame = null;
    private $sameLocals1StackItemFrameExtended = null;
    private $chopFrame = null;
    private $sameFrameExtended = null;
    private $appendFrame = null;
    private $fullFrame = null;
    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        // back by frametype
        $this->getClass()->seek(-1);
        if ($this->frameType >= 0 && $this->frameType <= 63) {
            $this->sameFrame = new _SameFrame($this->getClass());
        } elseif ($this->frameType >= 64 && $this->frameType <= 127) {
            $this->sameLocals1StackItemFrame = new _SameLocals1StackItemFrame($this->getClass());
        } elseif ($this->frameType == 247) {
            $this->sameLocals1StackItemFrameExtended = new _SameLocals1StackItemFrameExtended($this->getClass());
        } elseif ($this->frameType >= 248 && $this->frameType <= 250) {
            $this->chopFrame = new _ChopFrame($this->getClass());
        } elseif ($this->frameType == 251) {
            $this->sameFrameExtended = new _SameFrameExtended($this->getClass());
        } elseif ($this->frameType >= 252 && $this->frameType <= 254) {
            $this->appendFrame = new _AppendFrame($this->getClass());
        } elseif ($this->frameType == 255) {
            $this->fullFrame = new _FullFrame($this->getClass());
        }
    }
}
