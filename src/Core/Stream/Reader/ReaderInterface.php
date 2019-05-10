<?php
namespace PHPJava\Core\Stream\Reader;

use PHPJava\Core\JVM\Stream\BinaryReader;

interface ReaderInterface
{
    public function __toString(): string;

    public function getBinaryReader(): BinaryReader;

    public function getFileName(): string;

    public function getJavaPathName(): string;
}
