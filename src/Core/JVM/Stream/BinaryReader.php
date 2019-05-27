<?php
namespace PHPJava\Core\JVM\Stream;

use PHPJava\Exceptions\BinaryReaderException;

class BinaryReader implements StreamReaderInterface
{
    /**
     * @var resource
     */
    private $handle;

    /**
     * @var int
     */
    private $offset = 0;

    /**
     * @param resource $handle
     */
    public function __construct($handle)
    {
        $this->handle = $handle;
    }

    /**
     * @throws BinaryReaderException
     */
    final public function read(int $bytes = 1): string
    {
        $this->offset += $bytes;
        if ($bytes === 0) {
            return '';
        }
        $read = fread($this->handle, $bytes);
        if (strlen($read) !== $bytes) {
            throw new BinaryReaderException(
                'Read binary from stream is incorrect. that expected length is ' .
                $bytes .
                ', but actual length is ' . strlen($read) . '.'
            );
        }
        return $read;
    }

    public function readByte(): int
    {
        return current(unpack('c', $this->read(1)));
    }

    public function readUnsignedByte(): int
    {
        return current(unpack('C', $this->read(1)));
    }

    public function readUnsignedInt(): int
    {
        return current(unpack('N', $this->read(4)));
    }

    public function readUnsignedShort(): int
    {
        return current(unpack('n', $this->read(2)));
    }

    public function readInt(): int
    {
        return current(unpack('N', $this->read(4)));
    }

    public function readShort(): int
    {
        $short = $this->readUnsignedShort();
        return (($short & 0x8000) > 0) ? ($short - 0xFFFF - 1) : $short;
    }

    public function readUnsignedLong(): int
    {
        return current(unpack('J', $this->read(8)));
    }

    public function readLong(): int
    {
        return hexdec(bin2hex($this->read(8)));
    }

    public function seek(int $bytes): void
    {
        $this->offset += $bytes;
        fseek($this->handle, $bytes, SEEK_CUR);
    }

    public function setOffset(int $pointer): void
    {
        $this->offset = $pointer;
        fseek($this->handle, $pointer, SEEK_SET);
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
