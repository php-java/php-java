<?php
namespace PHPJava\Kernel\Frames;

class AppendFrame implements FrameInterface
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

    /**
     * @var \PHPJava\Kernel\Structures\VerificationTypeInfo[]
     */
    private $locals = [];

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
        for ($i = 0, $s = $this->frameType - 251; $i < $s; $i++) {
            $local = new \PHPJava\Kernel\Structures\VerificationTypeInfo($this->reader);
            $local->execute();
            $this->locals[] = $local;
        }
    }
}
