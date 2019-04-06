<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Fieldref implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $classIndex = null;
    private $nameAndTypeIndex = null;
    public function execute(): void
    {
        $this->classIndex = $this->readUnsignedShort();
        $this->nameAndTypeIndex = $this->readUnsignedShort();
    }
    public function getClassIndex()
    {
        return $this->classIndex;
    }
    public function getNameAndTypeIndex()
    {
        return $this->nameAndTypeIndex;
    }
}
