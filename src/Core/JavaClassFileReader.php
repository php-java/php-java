<?php
namespace PHPJava\Core;

use PHPJava\Utilities\ClassResolver;

class JavaClassFileReader implements JavaClassReaderInterface
{
    private $fileName;
    private $handle;
    private $binaryReader;

    public function __construct(string $file)
    {
        if (!preg_match('/\.class$/', $file, $matches)) {
            // Add extension
            $file = $file . '.class';
        }
        $this->handle = fopen($file, 'r');
        $this->binaryReader = new JVM\Stream\BinaryReader($this->handle);

        // Add resolving path
        ClassResolver::add(
            [
                [ClassResolver::RESOURCE_TYPE_FILE, dirname($file)],
                [ClassResolver::RESOURCE_TYPE_FILE, getcwd()],
            ]
        );
    }

    public function getBinaryReader(): JVM\Stream\BinaryReader
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
