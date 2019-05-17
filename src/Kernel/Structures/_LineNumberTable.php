<?php
namespace PHPJava\Kernel\Structures;

class _LineNumberTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $startPc;

    /**
     * @var int
     */
    private $lineNumber;

    public function execute(): void
    {
        $this->startPc = $this->readUnsignedShort();
        $this->lineNumber = $this->readUnsignedShort();
    }

    public function getStartPc(): int
    {
        return $this->startPc;
    }

    public function getLineNumber(): int
    {
        return $this->lineNumber;
    }
}
