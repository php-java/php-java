<?php
namespace PHPJava\Kernel\Structures;

class _MethodHandle implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $referenceKind = 0;

    /**
     * @var int
     */
    private $referenceIndex = 0;

    public function execute(): void
    {
        $this->referenceKind = $this->readUnsignedByte();
        $this->referenceIndex = $this->readUnsignedShort();
    }

    public function getReferenceKind(): int
    {
        return $this->referenceKind;
    }

    public function getReferenceIndex(): int
    {
        return $this->referenceIndex;
    }
}
