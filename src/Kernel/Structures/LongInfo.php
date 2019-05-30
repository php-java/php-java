<?php
namespace PHPJava\Kernel\Structures;

class LongInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $bytes = 0;

    public function execute(): void
    {
        $this->bytes = $this->readUnsignedLong();
    }

    public function getBytes(): int
    {
        return $this->bytes;
    }
}
