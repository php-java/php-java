<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _Utf8 implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $length = 0;
    private $string = '';
    public function execute(): void
    {
        $this->length = $this->readUnsignedShort();
        for ($i = 0; $i < $this->length; $i++) {
            $this->string .= chr($this->readUnsignedByte());
        }
    }
    public function getLength()
    {
        return $this->length;
    }
    public function getString()
    {
        return $this->string;
    }
}
