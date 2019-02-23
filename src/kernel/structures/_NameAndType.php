<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _NameAndType implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $NameIndex = null;
    private $DescriptorIndex = null;
    public function execute(): void
    {
        $this->NameIndex = $this->readUnsignedShort();
        $this->DescriptorIndex = $this->readUnsignedShort();
    }
    public function getNameIndex()
    {
        return $this->NameIndex;
    }
    public function getDescriptorIndex()
    {
        return $this->DescriptorIndex;
    }
}
