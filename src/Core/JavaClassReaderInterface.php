<?php
namespace PHPJava\Core;

interface JavaClassReaderInterface
{
    public function __toString(): string;
    public function getBinaryReader(): JVM\Stream\BinaryReader;
    public function getFileName(): string;
    public function getJavaPathName(): string;
}
