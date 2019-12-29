<?php
declare(strict_types=1);
namespace PHPJava\Core\Stream\Reader;

use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Core\JVM\Stream\StreamReaderInterface;

interface ReaderInterface
{
    public function __toString(): string;

    /**
     * @return BinaryReader|PackageReader|StreamReaderInterface
     */
    public function getReader(): StreamReaderInterface;

    public function getFileName(): string;

    public function getJavaPathName(): string;
}
