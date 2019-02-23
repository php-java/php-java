<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

class _ObjectVariableInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $Tag = null;
    private $cpoolIndex = null;
    public function execute(): void
    {
        $this->Tag = $this->readUnsignedByte();
        $this->cpoolIndex = $this->readUnsignedShort();
    }
}
