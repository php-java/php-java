<?php
namespace PHPJava\Kernel\Frames;

class SameFrameExtended implements FrameInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * @var int
     */
    private $frameType;

    /**
     * @var int
     */
    private $offsetDelta;

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
    }
}
