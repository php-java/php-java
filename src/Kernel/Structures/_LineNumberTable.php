<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _LineNumberTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $startPc = null;
    private $lineNumber = null;

    public function execute(): void
    {
    }

    public function setStartPc($startPc)
    {
        $this->startPc = $startPc;
        return $this;
    }
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;
        return $this;
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
