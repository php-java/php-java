<?php
namespace PHPJava\Kernel\Structures;

class _Utf8 implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $length = 0;
    private $string = '';

    /**
     * @var \PHPJava\Packages\java\lang\_String $stringObject
     */
    private $stringObject;

    public function execute(): void
    {
        $this->length = $this->readUnsignedShort();
        for ($i = 0; $i < $this->length; $i++) {
            $this->string .= chr($this->readUnsignedByte());
        }
        $this->stringObject = new \PHPJava\Packages\java\lang\_String($this);
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getString()
    {
        return $this->string;
    }

    public function __toString(): string
    {
        return $this->getString();
    }

    public function getStringObject(): \PHPJava\Packages\java\lang\_String
    {
        return $this->stringObject;
    }
}
