<?php
namespace PHPJava\Compiler\Lang\Stream;

class FileStream extends AbstractStream
{
    public function __construct($source)
    {
        $this->filePath = realpath($source);
        $this->source = file_get_contents($source);
    }
}
