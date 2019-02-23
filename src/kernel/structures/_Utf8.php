<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Utf8 implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $Length = 0;
    private $String = '';
    public function execute(): void
    {
        $this->Length = $this->readUnsignedShort();
        for ($i = 0; $i < $this->Length; $i++) {
            $this->String .= chr($this->readUnsignedByte());
        }
    }
    public function getLength()
    {
        return $this->Length;
    }
    public function getString()
    {
        return $this->String;
    }
}
