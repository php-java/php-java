<?php
namespace PHPJava\Kernel\Frames;

class FullFrame implements FrameInterface
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
     * @var int
     */
    private $numberOfLocals;

    /**
     * @var int
     */
    private $numberOfStackItems;

    /**
     * @var \PHPJava\Kernel\Structures\VerificationTypeInfo
     */
    private $locals = [];

    /**
     * @var \PHPJava\Kernel\Structures\VerificationTypeInfo
     */
    private $stack = [];

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
        $this->numberOfLocals = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfLocals; $i++) {
            $local = new \PHPJava\Kernel\Structures\VerificationTypeInfo($this->reader);
            $local->execute();
            $this->locals = $local;
        }
        $this->numberOfStackItems = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfStackItems; $i++) {
            $stack = new \PHPJava\Kernel\Structures\VerificationTypeInfo($this->reader);
            $stack->execute();
            $this->stack[] = $stack;
        }
    }
}
