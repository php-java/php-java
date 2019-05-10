<?php
namespace PHPJava\Kernel\Structures;

class _LineNumberTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $startPc;
    private $lineNumber;

    public function execute(): void
    {
        $this->startPc = $this->readUnsignedShort();
        $this->lineNumber = $this->readUnsignedShort();
    }

    public function getStartPc()
    {
        return $this->startPc;
    }

    public function getLineNumber()
    {
        return $this->lineNumber;
    }
}
