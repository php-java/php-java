<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _MethodType implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $descriptorIndex;

    public function execute(): void
    {
        $this->descriptorIndex = $this->readUnsignedShort();
    }

    public function getDescriptorIndex(): int
    {
        return $this->descriptorIndex;
    }
}
