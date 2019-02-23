<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Integer implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $bytes = null;
    public function execute(): void
    {
        $this->bytes = $this->readInt();
    }
    public function getBytes()
    {
        return $this->bytes;
    }
}
