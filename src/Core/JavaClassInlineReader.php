<?php
namespace PHPJava\Core;

use PHPJava\Utilities\ClassResolver;

class JavaClassInlineReader implements JavaClassReader
{
    private $fileName;
    private $handle;
    private $binaryReader;

    public function __construct(string $fileName, string $code)
    {
        $this->fileName = $fileName;
        $this->handle = fopen('php://memory', 'rw');
        fwrite($this->handle, $code);
        rewind($this->handle);
        $this->binaryReader = new JVM\Stream\BinaryReader($this->handle);
    }

    public function getBinaryReader(): JVM\Stream\BinaryReader
    {
        return $this->binaryReader;
    }

    public function __toString(): string
    {
        return $this->fileName;
    }
}
