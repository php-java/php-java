<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _LocalVariableTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $startPc = 0;
    private $length = 0;
    private $nameIndex = 0;
    private $descriptorIndex = 0;
    private $index = 0;
    public function execute(): void
    {
        $this->startPc = $this->readUnsignedShort();
        $this->length = $this->readUnsignedShort();
        $this->nameIndex = $this->readUnsignedShort();
        $this->descriptorIndex = $this->readUnsignedShort();
        $this->index = $this->readUnsignedShort();
    }
}
