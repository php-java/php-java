<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Frames;

class SameFrame implements FrameInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * @var int
     */
    private $frameType;

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
    }
}
