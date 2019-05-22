<?php
namespace PHPJava\Core\Stream\Reader;

use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Core\JVM\Stream\StreamReaderInterface;

class FileReader implements ReaderInterface
{
    /**
     * @var resource
     */
    private $handle;

    /**
     * @var BinaryReader
     */
    private $binaryReader;

    public function __construct(string $file)
    {
        if (!preg_match('/\.class$/', $file, $matches)) {
            // Add extension
            $file = $file . '.class';
        }
        $this->handle = fopen($file, 'r');
        $this->binaryReader = new BinaryReader($this->handle);
    }

    public function getReader(): StreamReaderInterface
    {
        return $this->binaryReader;
    }

    public function getJavaPathName(): string
    {
        return preg_replace(
            '/\.class$/',
            '',
            basename($this->getFileName())
        );
    }

    public function getFileName(): string
    {
        return stream_get_meta_data($this->handle)['uri'];
    }

    public function __toString(): string
    {
        return $this->getFileName();
    }
}
