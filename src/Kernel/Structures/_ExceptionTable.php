<?php
namespace PHPJava\Kernel\Structures;

class _ExceptionTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $startPc;
    private $endPc;
    private $handlerPc;
    private $catchType;

    public function execute(): void
    {
        $this->startPc = $this->readUnsignedShort();
        $this->endPc = $this->readUnsignedShort();
        $this->handlerPc = $this->readUnsignedShort();
        $this->catchType = $this->readUnsignedShort();
    }

    public function getStartPc()
    {
        return $this->startPc;
    }

    public function getEndPc()
    {
        return $this->endPc;
    }

    public function getHandlerPc()
    {
        return $this->handlerPc;
    }

    public function getCatchType()
    {
        return $this->catchType;
    }
}
