<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _UninitializedVariableInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag = null;
    private $offset = null;
    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
        $this->offset = $this->readUnsignedShort();
    }
}
