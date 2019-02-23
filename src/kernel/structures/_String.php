<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _String implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $StringIndex = null;
    public function execute(): void
    {
        $this->StringIndex = $this->Class->readUnsignedShort();
    }
    public function getStringIndex () {
        return $this->StringIndex;
    }
}
