<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _FullFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $frameType = null;
    private $offsetDelta = null;
    private $numberOfLocals = null;
    private $numberOfStackItems = null;
    private $locals = array();
    private $stack = array();
    public function execute(): void
    {
        $this->frameType = $this->readUnsignedByte();
        $this->offsetDelta = $this->readUnsignedShort();
        $this->numberOfLocals = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfLocals; $i++) {
            $this->locals[] = new _VerificationTypeInfo($this->getClass());
        }
        $this->numberOfStackItems = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfStackItems; $i++) {
            $this->stack[] = new _VerificationTypeInfo($this->getClass());
        }
    }
}
