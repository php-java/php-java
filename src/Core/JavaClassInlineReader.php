<?php
namespace PHPJava\Core;

use PHPJava\Utilities\ClassResolver;

class JavaClassInlineReader implements JavaClassReaderInterface
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

    public function getJavaPathName(): string
    {
        return str_replace('/', '.', $this->getFileName());
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function __toString(): string
    {
        return $this->getFileName();
    }
}
