<?php
namespace PHPJava\Kernel\Frames;

class SameLocals1StackItemFrame implements FrameInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * @var int
     */
    private $frameType;

    /**
     * @var \PHPJava\Kernel\Structures\_VerificationTypeInfo[]
     */
    private $stack = [];

    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $stack = new \PHPJava\Kernel\Structures\_VerificationTypeInfo($this->reader);
        $stack->execute();
        $this->stack[] = $stack;
    }
}
