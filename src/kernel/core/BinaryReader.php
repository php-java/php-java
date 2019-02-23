<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClassReader;

trait BinaryReader
{
    private $binaryReader;

    public function __construct(JavaClassReader $reader)
    {
        $this->binaryReader = $reader->getBinaryReader();
    }

    final public function read($bytes = 1)
    {
        return $this->binaryReader->read($bytes);
    }

    public function readByte()
    {
        return $this->binaryReader->readByte();
    }

    public function readUnsignedByte()
    {
        return $this->binaryReader->readUnsignedByte();
    }

    public function readUnsignedInt()
    {
        return $this->binaryReader->readUnsignedInt();
    }

    public function readUnsignedShort()
    {
        return $this->binaryReader->readUnsignedShort();
    }

    public function readInt()
    {
        return $this->binaryReader->readInt();
    }

    public function readShort()
    {
        return $this->binaryReader->readShort();
    }

    public function readUnsignedLong()
    {
        return $this->binaryReader->readUnsignedLong();
    }

    public function readLong()
    {
        return $this->binaryReader->readLong();
    }

    public function seek($bytes)
    {
        $this->binaryReader->seek($bytes);
    }

    public function setOffset($pointer)
    {
        $this->binaryReader->setOffset($pointer);
    }

    public function getOffset()
    {
        return $this->binaryReader->getOffset();
    }
}
