<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Double implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $highBytes = null;
    private $lowBytes = null;
    public function execute(): void
    {
        $this->highBytes = $this->readUnsignedInt();
        $this->lowBytes = $this->readUnsignedInt();
    }
    public function getBytes()
    {
        return ($this->highBytes << 32) + $this->lowBytes;
    }
}
