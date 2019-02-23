<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;

trait Accumulator
{
    private $javaClass;
    
    /**
     * @var \PHPJava\Core\JVM\Stream\BinaryReader
     */
    private $reader;
    private $localStorage;
    private $pointer;

    public function setParameters(
        JavaClass $javaClass,
        \PHPJava\Core\JVM\Stream\BinaryReader $reader,
        array $localStorage,
        int $pointer
    ): self {
        $this->javaClass = $javaClass;
        $this->reader = $reader;
        $this->localStorage = $localStorage;
        $this->pointer = $pointer;
        return $this;
    }

    final public function read($bytes = 1)
    {
        return $this->reader->read($bytes);
    }

    public function readByte()
    {
        return $this->reader->readByte();
    }

    public function readUnsignedByte()
    {
        return $this->reader->readUnsignedByte();
    }

    public function readUnsignedInt()
    {
        return $this->reader->readUnsignedInt();
    }

    public function readUnsignedShort()
    {
        return $this->reader->readUnsignedShort();
    }

    public function readInt()
    {
        return $this->reader->readInt();
    }

    public function readShort()
    {
        return $this->reader->readShort();
    }

    public function readUnsignedLong()
    {
        return $this->reader->readUnsignedLong();
    }

    public function readLong()
    {
        return $this->reader->readLong();
    }

    public function seek($bytes)
    {
        $this->reader->seek($bytes);
    }

    public function setOffset($pointer)
    {
        $this->reader->setOffset($pointer);
    }

    public function getOffset()
    {
        return $this->reader->getOffset();
    }
}
