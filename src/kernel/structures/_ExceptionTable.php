<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _ExceptionTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $StartPc = null;
    private $EndPc = null;
    private $HandlerPc = null;
    private $CatchType = null;
    public function setStartPc($StartPc)
    {
        $this->StartPc = $StartPc;
    }
    public function setEndPc($EndPc)
    {
        $this->EndPc = $EndPc;
    }
    public function setHandlerPc($HandlerPc)
    {
        $this->HandlerPc = $HandlerPc;
    }
    public function setCatchType($CatchType)
    {
        $this->CatchType = $CatchType;
    }
    public function getStartPc()
    {
        return $this->StartPc;
    }
    public function getEndPc()
    {
        return $this->EndPc;
    }
    public function getHandlerPc()
    {
        return $this->HandlerPc;
    }
    public function getCatchType()
    {
        return $this->CatchType;
    }
}
