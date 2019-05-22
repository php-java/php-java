<?php
namespace PHPJava\Core\Stream\Reader;

use PHPJava\Core\JVM\Stream\ReflectionClassReader;
use PHPJava\Core\JVM\Stream\StreamReaderInterface;
use PHPJava\Utilities\Formatter;

class PackageReader implements ReaderInterface
{
    private $classPath;

    /**
     * @var ReflectionClassReader
     */
    private $reflectionClassReader;

    public function __construct(string $classPath)
    {
        [, $this->classPath] = Formatter::convertJavaNamespaceToPHP($classPath);
        $this->reflectionClassReader = new ReflectionClassReader(
            new \ReflectionClass($this->classPath)
        );
    }

    public function getReader(): StreamReaderInterface
    {
        return $this->reflectionClassReader;
    }

    public function getJavaPathName(): string
    {
        return Formatter::convertJavaNamespaceToPHP($this->classPath);
    }

    public function getFileName(): string
    {
        return basename($this->classPath);
    }

    public function __toString(): string
    {
        return $this->getFileName();
    }
}
