<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Utilities\BinaryTool;

class _Utf8 implements StructureInterface, FreezableInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $length = 0;
    private $string = '';
    private $isWritable = null;
    private $isFrozen = false;

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

    public function getLength(): int
    {
        return $this->length;
    }

    public function enableWrite(bool $enable): self
    {
        if (!$this->isFrozen) {
            $this->isWritable = $enable;
        }
        return $this;
    }

    public function freeze(): void
    {
        $this->isFrozen = true;
        $this->enableWrite(false);
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function getStringObject(): \PHPJava\Packages\java\lang\_String
    {
        return $this->stringObject;
    }

    public function setStringObject(\PHPJava\Packages\java\lang\_String $stringObject): self
    {
        if ($this->isWritable) {
            $this->stringObject = $stringObject;
            $this->freeze();
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->getString();
    }
}
