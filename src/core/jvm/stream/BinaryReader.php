<?php
namespace PHPJava\Core\JVM\Stream;

use PHPJava\Kernel\Utilities\BinaryTool;

class BinaryReader
{
    private $handle;
    private $offset = 0;

    public function __construct($handle)
    {
        $this->handle = $handle;
    }

    final public function read($bytes = 1)
    {
        $this->offset += $bytes;
        return fread($this->handle, $bytes);
    }

    public function readByte()
    {
        return current(unpack('c', $this->read(1)));
    }

    public function readUnsignedByte()
    {
        return (int) sprintf('%u', ord($this->read(1)));
    }

    public function readUnsignedInt()
    {
        return base_convert(bin2hex($this->read(4)), 16, 10);
    }

    public function readUnsignedShort()
    {
        return (int) sprintf('%u', hexdec(bin2hex($this->read(2))));
    }

    public function readInt()
    {
        return hexdec(bin2hex($this->read(4)));
    }

    public function readShort()
    {
        $short = (int) sprintf('%u', hexdec(bin2hex($this->read(2))));
        return (($short & 0x8000) > 0) ? ($short - 0xFFFF - 1) : $short ;
    }

    public function readUnsignedLong()
    {
        if (PHP_INT_MAX === 2147483647) {
            return base_convert(bin2hex($this->read(8)), 16, 10);
        }

        return (int) sprintf('%u', hexdec(bin2hex($this->read(8))));
    }

    public function readLong()
    {
        return hexdec(bin2hex($this->read(8)));
    }

    public function seek($bytes)
    {
        $this->offset += $bytes;
        fseek($this->handle, $bytes, SEEK_CUR);
    }

    public function setOffset($pointer)
    {
        $this->offset = $pointer;
        fseek($this->handle, $pointer, SEEK_SET);
    }

    public function getOffset()
    {
        return $this->offset;
    }
}
