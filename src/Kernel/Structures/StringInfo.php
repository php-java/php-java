<?php
namespace PHPJava\Kernel\Structures;

class StringInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $stringIndex;

    public function execute(): void
    {
        $this->stringIndex = $this->readUnsignedShort();
    }

    public function getStringIndex(): int
    {
        return $this->stringIndex;
    }
}
