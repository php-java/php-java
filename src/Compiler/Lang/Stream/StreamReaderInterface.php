<?php
namespace PHPJava\Compiler\Lang\Stream;

interface StreamReaderInterface
{
    public function __construct($source);

    public function getCode(): string;

    public function getFilePath(): string;

    public function setDistributeDirectory(string $path): StreamReaderInterface;

    public function getDistributeDirectory(): string;
}
