<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _NameAndType implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $NameIndex = null;
    private $DescriptorIndex = null;
    public function execute(): void
    {
        $this->NameIndex = $this->Class->readUnsignedShort();
        $this->DescriptorIndex = $this->Class->readUnsignedShort();
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
