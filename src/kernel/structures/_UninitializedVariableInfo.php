<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _UninitializedVariableInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $Tag = null;
    private $Offset = null;
    public function execute(): void
    {
        $this->Tag = $this->readUnsignedByte();
        $this->Offset = $this->readUnsignedShort();
    }
}
