<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _SameLocals1StackItemFrame implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $FrameType = null;
    private $Stack = array();
    public function execute(): void
    {
        $this->FrameType = $this->readUnsignedByte();
        $this->Stack[] = new _VerificationTypeInfo($this->getClass());
    }
}
