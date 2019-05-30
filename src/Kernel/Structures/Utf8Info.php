<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Core\JavaClass;

class Utf8Info implements StructureInterface, FreezableInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $length = 0;

    /**
     * @var string
     */
    private $string = '';

    /**
     * @var bool
     */
    private $isWritable = false;

    /**
     * @var bool
     */
    private $isFrozen = false;

    /**
     * @var JavaClass $stringObject
     */
    private $stringObject;

    public function execute(): void
    {
        $this->length = $this->readUnsignedShort();
        for ($i = 0; $i < $this->length; $i++) {
            $this->string .= chr($this->readUnsignedByte());
        }
        $this->stringObject = JavaClass::load('java.lang.String');
        $this->stringObject->getInvoker()->construct($this->string);
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

    public function getStringObject(): JavaClass
    {
        return $this->stringObject;
    }

    public function setStringObject(JavaClass $stringObject): self
    {
        // TODO: Add validation that checks $stringObject is a java.lang.String.
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
