<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

class _LineNumberTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    private $StartPc = null;
    private $LineNumber = null;
    public function setStartPc($StartPc)
    {
        $this->StartPc = $StartPc;
    }
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;
    }
    public function getStartPc()
    {
        return $this->StartPc;
    }
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
}
