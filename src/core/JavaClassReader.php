<?php
namespace PHPJava\Core;

class JavaClassReader
{
    private $handle;
    private $binaryReader;

    public function __construct(string $file)
    {
        $this->handle = fopen($file, 'r');
        $this->binaryReader = new \PHPJava\Core\JVM\Stream\BinaryReader($this->handle);
    }

    public function getBinaryReader(): \PHPJava\Core\JVM\Stream\BinaryReader
    {
        return $this->binaryReader;
    }

    public function __toString(): string
    {
        return stream_get_meta_data($this->handle)['uri'];
    }
}
