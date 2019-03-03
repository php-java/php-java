<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassReaderInterface;

class ActiveInterface
{
    private $entries = [];
    private $reader;

    public function __construct(JavaClassReaderInterface $reader, int $entries, ConstantPool $constantPool)
    {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            // not implemented, read only
            $this->entries[$i] = $reader->getBinaryReader()->readUnsignedShort();
        }
    }

    public function getEntries()
    {
        return $this->entries;
    }
}
