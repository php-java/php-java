<?php
namespace PHPJava\Kernel\Structures;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Long implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    // private $HighBytes = null;
    // private $LowBytes = null;
    private $Bytes = 0;
    public function execute(): void
    {
        //$this->HighBytes = $this->readUnsignedInt();
        //$this->LowBytes = $this->readUnsignedInt();
        $this->Bytes = $this->readLong();
    }
    public function getBytes()
    {
        //return ($this->HighBytes << 32) + $this->LowBytes;
        return $this->Bytes;
    }
}
