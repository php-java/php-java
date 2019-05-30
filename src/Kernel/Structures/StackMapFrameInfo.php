<?php
namespace PHPJava\Kernel\Structures;

class StackMapFrameInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $frameType;

    /**
     * @var null|StructureInterface
     */
    private $frame;

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        // back by frametype
        $this->reader->getReader()->seek(-1);

        if ($this->frameType >= 0 && $this->frameType <= 63) {
            $this->frame = new \PHPJava\Kernel\Frames\SameFrame($this->reader);
        } elseif ($this->frameType >= 64 && $this->frameType <= 127) {
            $this->frame = new \PHPJava\Kernel\Frames\SameLocals1StackItemFrame($this->reader);
        } elseif ($this->frameType == 247) {
            $this->frame = new \PHPJava\Kernel\Frames\SameLocals1StackItemFrameExtended($this->reader);
        } elseif ($this->frameType >= 248 && $this->frameType <= 250) {
            $this->frame = new \PHPJava\Kernel\Frames\ChopFrame($this->reader);
        } elseif ($this->frameType == 251) {
            $this->frame = new \PHPJava\Kernel\Frames\SameFrameExtended($this->reader);
        } elseif ($this->frameType >= 252 && $this->frameType <= 254) {
            $this->frame = new \PHPJava\Kernel\Frames\AppendFrame($this->reader);
        } elseif ($this->frameType == 255) {
            $this->frame = new \PHPJava\Kernel\Frames\FullFrame($this->reader);
        }
        $this->frame->execute();
    }

    public function getFrame(): StructureInterface
    {
        return $this->frame;
    }
}
