<?php
namespace PHPJava\Core\Stream\Reader;

use PHPJava\Core\JVM\Stream\BinaryReader;

class InlineReader implements ReaderInterface
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @var resource
     */
    private $handle;

    /**
     * @var BinaryReader
     */
    private $binaryReader;

    public function __construct(string $fileName, string $code)
    {
        $this->fileName = $fileName;
        $this->handle = fopen('php://memory', 'rw');
        fwrite($this->handle, $code);
        rewind($this->handle);
        $this->binaryReader = new BinaryReader($this->handle);
    }

    public function getBinaryReader(): BinaryReader
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
