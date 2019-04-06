<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _NameAndType implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $nameIndex = null;
    private $descriptorIndex = null;
    public function execute(): void
    {
        $this->nameIndex = $this->readUnsignedShort();
        $this->descriptorIndex = $this->readUnsignedShort();
    }
    public function getNameIndex()
    {
        return $this->nameIndex;
    }
    public function getDescriptorIndex()
    {
        return $this->descriptorIndex;
    }
}
