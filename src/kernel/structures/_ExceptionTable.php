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
    public function setStartPc($startPc)
    {
        $this->startPc = $startPc;
    }
    public function setEndPc($endPc)
    {
        $this->endPc = $endPc;
    }
    public function setHandlerPc($handlerPc)
    {
        $this->handlerPc = $handlerPc;
    }
    public function setCatchType($catchType)
    {
        $this->catchType = $catchType;
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
