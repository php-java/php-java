<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassReaderInterface;
use PHPJava\Utilities\DebugTool;

class ActiveInterface
{
    private $entries = [];
    private $reader;

    public function __construct(
        JavaClassReaderInterface $reader,
        int $entries,
        ConstantPool $constantPool,
        DebugTool $debugTool
    ) {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            $this->entries[$i] = $reader->getBinaryReader()->readUnsignedShort();
        }
    }

    public function getEntries()
    {
        return $this->entries;
    }
}
