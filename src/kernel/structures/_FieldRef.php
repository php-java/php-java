<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Fieldref implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $ClassIndex = null;
    private $NameAndTypeIndex = null;
    public function execute(): void
    {
        $this->ClassIndex = $this->readUnsignedShort();
        $this->NameAndTypeIndex = $this->readUnsignedShort();
    }
    public function getClassIndex()
    {
        return $this->ClassIndex;
    }
    public function getNameAndTypeIndex()
    {
        return $this->NameAndTypeIndex;
    }
}
