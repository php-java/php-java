<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\Stream\Reader\ReaderInterface;

trait BinaryReader
{
    /**
     * @var ReaderInterface
     */
    private $reader;

    public function __construct(ReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    final public function read(int $bytes = 1): string
    {
        return $this->reader->getBinaryReader()->read($bytes);
    }

    public function readByte(): int
    {
        return $this->reader->getBinaryReader()->readByte();
    }

    public function readUnsignedByte(): int
    {
        return $this->reader->getBinaryReader()->readUnsignedByte();
    }

    public function readUnsignedInt(): int
    {
        return $this->reader->getBinaryReader()->readUnsignedInt();
    }

    public function readUnsignedShort(): int
    {
        return $this->reader->getBinaryReader()->readUnsignedShort();
    }

    public function readInt(): int
    {
        return $this->reader->getBinaryReader()->readInt();
    }

    public function readShort(): int
    {
        return $this->reader->getBinaryReader()->readShort();
    }

    public function readUnsignedLong(): int
    {
        return $this->reader->getBinaryReader()->readUnsignedLong();
    }

    public function readLong(): int
    {
        return $this->reader->getBinaryReader()->readLong();
    }

    public function seek($bytes): void
    {
        $this->reader->getBinaryReader()->seek($bytes);
    }

    public function setOffset($pointer): void
    {
        $this->reader->getBinaryReader()->setOffset($pointer);
    }

    public function getOffset(): int
    {
        return $this->reader->getBinaryReader()->getOffset();
    }
}
