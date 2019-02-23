<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassReader;

class ActiveInterface
{
    private $entries = [];
    private $reader;

    public function __construct(JavaClassReader $reader, int $entries)
    {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            // not implemented, read only
            $this->entries[$i] = $reader->getBinaryReader()->readUnsignedShort();
        }
    }
}
