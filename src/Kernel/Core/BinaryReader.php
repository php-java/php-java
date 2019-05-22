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
        return $this->reader->getReader()->read($bytes);
    }

    public function readByte(): int
    {
        return $this->reader->getReader()->readByte();
    }

    public function readUnsignedByte(): int
    {
        return $this->reader->getReader()->readUnsignedByte();
    }

    public function readUnsignedInt(): int
    {
        return $this->reader->getReader()->readUnsignedInt();
    }

    public function readUnsignedShort(): int
    {
        return $this->reader->getReader()->readUnsignedShort();
    }

    public function readInt(): int
    {
        return $this->reader->getReader()->readInt();
    }

    public function readShort(): int
    {
        return $this->reader->getReader()->readShort();
    }

    public function readUnsignedLong(): int
    {
        return $this->reader->getReader()->readUnsignedLong();
    }

    public function readLong(): int
    {
        return $this->reader->getReader()->readLong();
    }

    public function seek($bytes): void
    {
        $this->reader->getReader()->seek($bytes);
    }

    public function setOffset($pointer): void
    {
        $this->reader->getReader()->setOffset($pointer);
    }

    public function getOffset(): int
    {
        return $this->reader->getReader()->getOffset();
    }
}
