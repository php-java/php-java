<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClassReaderInterface;

trait BinaryReader
{
    private $reader;

    public function __construct(JavaClassReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    final public function read($bytes = 1)
    {
        return $this->reader->getBinaryReader()->read($bytes);
    }

    public function readByte()
    {
        return $this->reader->getBinaryReader()->readByte();
    }

    public function readUnsignedByte()
    {
        return $this->reader->getBinaryReader()->readUnsignedByte();
    }

    public function readUnsignedInt()
    {
        return $this->reader->getBinaryReader()->readUnsignedInt();
    }

    public function readUnsignedShort()
    {
        return $this->reader->getBinaryReader()->readUnsignedShort();
    }

    public function readInt()
    {
        return $this->reader->getBinaryReader()->readInt();
    }

    public function readShort()
    {
        return $this->reader->getBinaryReader()->readShort();
    }

    public function readUnsignedLong()
    {
        return $this->reader->getBinaryReader()->readUnsignedLong();
    }

    public function readLong()
    {
        return $this->reader->getBinaryReader()->readLong();
    }

    public function seek($bytes)
    {
        $this->reader->getBinaryReader()->seek($bytes);
    }

    public function setOffset($pointer)
    {
        $this->reader->getBinaryReader()->setOffset($pointer);
    }

    public function getOffset()
    {
        return $this->reader->getBinaryReader()->getOffset();
    }
}
