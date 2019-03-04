<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Float implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $bytes = null;
    public function execute(): void
    {
        $this->bytes = $this->readUnsignedInt();
    }
    public function getBytes()
    {
        return BinaryTool::convertFloatToIEEE754($this->bytes);
    }
}
