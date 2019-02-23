<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

class _TopVariableInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $Tag = null;
    public function execute(): void
    {
        $this->Tag = $this->readUnsignedByte();
    }
}
