<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Utilities\BinaryTool;

class _Utf8 implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $length = 0;
    private $string = '';
    private $isWritable = false;

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

    /**
     * @param bool $enable
     * @return _Utf8
     */
    public function enableWrite(bool $enable): self
    {
        $this->isWritable = $enable;
        return $this;
    }

    /**
     * @param string $string
     * @return _Utf8
     * @throws ReadOnlyException
     */
    public function setString(string $string): self
    {
        if ($this->isWritable) {
            $this->string = $string;
            return $this;
        }

        throw new ReadOnlyException('You cannot overwrite constant.');
    }

    public function getString()
    {
        return $this->string;
    }

    public function __toString(): string
    {
        return $this->getString();
    }

    public function setStringObject(\PHPJava\Packages\java\lang\_String $stringObject): self
    {
        $this->stringObject = $stringObject;
        return $this;
    }

    public function getStringObject(): \PHPJava\Packages\java\lang\_String
    {
        return $this->stringObject;
    }
}
