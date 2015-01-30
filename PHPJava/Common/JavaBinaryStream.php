<?php

class JavaBinaryStream {

    private $Handle = null;
    private $Offset = 0;

    public final function __construct (&$handle) {

        $this->Handle = &$handle;

    }


    public final function read ($bytes = 1) {

        $this->Offset += $bytes;

        return fread($this->Handle, $bytes);

    }

    public function readByte () {

        return current(unpack('c', $this->read(1)));

    }

    public function readUnsignedByte () {

        return (int) sprintf('%u', ord($this->read(1)));

    }

    public function readUnsignedInt () {

        return base_convert(bin2hex($this->read(4)), 16, 10);

    }

    public function readUnsignedShort () {

        return (int) sprintf('%u', hexdec(bin2hex($this->read(2))));

    }

    public function readInt () {

        return BinaryTools::toSigned($this->readUnsignedInt(), 4);

    }

    public function readShort () {

        $short = (int) sprintf('%u', hexdec(bin2hex($this->read(2))));

        return (($short & 0x8000) > 0) ? ($short - 0xFFFF - 1) : $short ;

    }

    public function readUnsignedLong () {

        if (PHP_INT_MAX === 2147483647) {

            return base_convert(bin2hex($this->read(8)), 16, 10);

        }

        return (int) sprintf('%u', hexdec(bin2hex($this->read(8))));

    }

    public function readLong () {

        return BinaryTools::toSigned($this->readUnsignedLong(), 8);

    }

    public function seek ($bytes) {

        $this->Offset += $bytes;

        fseek($this->Handle, $bytes, SEEK_CUR);

    }

    public function setOffset ($pointer) {

        $this->Offset = $pointer;

        fseek($this->Handle, $pointer, SEEK_SET);

    }

    public function getOffset () {

        return $this->Offset;

    }


}