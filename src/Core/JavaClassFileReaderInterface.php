<?php
namespace PHPJava\Core;

use PHPJava\Utilities\ClassResolver;

class JavaClassFileReaderInterface implements JavaClassReaderInterface
{
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

    public function __toString(): string
    {
        return stream_get_meta_data($this->handle)['uri'];
    }
}
