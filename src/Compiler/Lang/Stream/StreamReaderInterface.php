<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Stream;

interface StreamReaderInterface
{
    public function __construct($source);

    public function getCode(): string;

    public function getFilePath(): string;

    public function setDistributeDirectory(string $path): StreamReaderInterface;

    /**
     * @return resource
     */
    public function getDistributeStreamByClassPath(string $classPath);
}
