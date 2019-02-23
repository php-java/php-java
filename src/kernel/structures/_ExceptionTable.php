<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _ExceptionTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $startPc = null;
    private $endPc = null;
    private $handlerPc = null;
    private $catchType = null;

    public function execute(): void
    {
    }

    public function setStartPc($startPc)
    {
        $this->startPc = $startPc;
        return $this;
    }

    public function setEndPc($endPc)
    {
        $this->endPc = $endPc;
        return $this;
    }

    public function setHandlerPc($handlerPc)
    {
        $this->handlerPc = $handlerPc;
        return $this;
    }

    public function setCatchType($catchType)
    {
        $this->catchType = $catchType;
        return $this;
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
