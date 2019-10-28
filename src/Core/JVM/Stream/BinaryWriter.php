<?php
namespace PHPJava\Core\JVM\Stream;

use PHPJava\Exceptions\CompilerException;

class BinaryWriter implements StreamWriterInterface
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
     * @var bool
     */
    private $buffer = false;

    /**
     * @param resource $handle
     */
    public function __construct($handle)
    {
        $this->handle = $handle;
    }

    public function write(string $binary)
    {
        fwrite($this->handle, $binary);
        return $this;
    }

    public function writeByte(int $value): self
    {
        return $this->write(pack('c', $value));
    }

    public function writeUnsignedByte(int $value): self
    {
        return $this->write(pack('C', $value));
    }

    public function writeInt(int $value): self
    {
        if ($value < 0) {
            $value += 0x800000;
        }
        return $this->writeUnsignedInt($value);
    }

    public function writeUnsignedInt(int $value): self
    {
        return $this->write(pack('N', $value));
    }

    public function writeShort(int $value): self
    {
        return $this->writeUnsignedShort($value);
    }

    public function writeUnsignedShort(int $value): self
    {
        return $this->write(pack('n', $value));
    }

    public function writeLong(int $value): self
    {
        throw new CompilerException(
            'Write a long size value to a binary file is not implemented yet.'
        );
        return $this;
    }

    public function writeUnsignedLong(int $value): self
    {
        return $this->write(pack('J', $value));
    }

    public function isWritable(): bool
    {
        $meta = stream_get_meta_data($this->handle);
        if (!isset($meta['mode'])) {
            return false;
        }

        foreach (['w', 'r+', 'a', 'c', 'x'] as $mode) {
            if (strstr($meta['mode'], $mode) !== false) {
                return true;
            }
        }
        return false;
    }

    public function enableBuffer(bool $isEnabled): self
    {
        $this->buffer = $isEnabled;
        return $this;
    }

    public function getStreamContents()
    {
        rewind($this->handle);
        return stream_get_contents($this->handle);
    }
}
