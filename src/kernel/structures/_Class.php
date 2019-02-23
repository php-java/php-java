<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Class implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $ClassIndex = null;
    public function execute(): void
    {
        $this->ClassIndex = $this->readUnsignedShort();
    }
    public function getClassIndex()
    {
        return $this->ClassIndex;
    }
}
