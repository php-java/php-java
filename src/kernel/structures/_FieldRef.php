<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _Fieldref implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $this->getClass()Index = null;
    private $NameAndTypeIndex = null;
    public function execute(): void
    {
        $this->ClassIndex = $this->Class->readUnsignedShort();
        $this->NameAndTypeIndex = $this->Class->readUnsignedShort();
    }
    public function getClassIndex () {
        return $this->ClassIndex;
    }
    public function getNameAndTypeIndex () {
        return $this->NameAndTypeIndex;
    }
}
