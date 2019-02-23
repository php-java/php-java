<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _FullFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $FrameType = null;
    private $OffsetDelta = null;
    private $NumberOfLocals = null;
    private $NumberOfStackItems = null;
    private $Locals = array();
    private $Stack = array();
    public function execute(): void
    {
        $this->FrameType = $this->readUnsignedByte();
        $this->OffsetDelta = $this->readUnsignedShort();
        $this->NumberOfLocals = $this->readUnsignedShort();
        for ($i = 0; $i < $this->NumberOfLocals; $i++) {
            $this->Locals[] = new _VerificationTypeInfo($this->getClass());
        }
        $this->NumberOfStackItems = $this->readUnsignedShort();
        for ($i = 0; $i < $this->NumberOfStackItems; $i++) {
            $this->Stack[] = new _VerificationTypeInfo($this->getClass());
        }
    }
}
