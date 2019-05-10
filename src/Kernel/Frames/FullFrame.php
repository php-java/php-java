<?php
namespace PHPJava\Kernel\Frames;

class FullFrame implements FrameInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $frameType;
    private $offsetDelta;
    private $numberOfLocals;
    private $numberOfStackItems;
    private $locals = [];
    private $stack = [];

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
        $this->numberOfLocals = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfLocals; $i++) {
            $local = new \PHPJava\Kernel\Structures\_VerificationTypeInfo($this->reader);
            $local->execute();
            $this->locals = $local;
        }
        $this->numberOfStackItems = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfStackItems; $i++) {
            $stack = new \PHPJava\Kernel\Structures\_VerificationTypeInfo($this->reader);
            $stack->execute();
            $this->stack[] = $stack;
        }
    }
}
