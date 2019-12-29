<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

class MethodTypeInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
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
