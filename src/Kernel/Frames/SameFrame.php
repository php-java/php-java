<?php
namespace PHPJava\Kernel\Frames;

class SameFrame implements FrameInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $frameType;

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
    }
}
