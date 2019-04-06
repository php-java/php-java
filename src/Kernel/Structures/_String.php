<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _String implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $stringIndex = null;
    public function execute(): void
    {
        $this->stringIndex = $this->readUnsignedShort();
    }
    public function getStringIndex()
    {
        return $this->stringIndex;
    }
}
