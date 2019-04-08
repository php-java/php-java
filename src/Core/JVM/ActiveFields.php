<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Utilities\DebugTool;

class ActiveFields
{
    private $entries = [];
    private $reader;

    public function __construct(
        ReaderInterface $reader,
        int $entries,
        ConstantPool $constantPool,
        DebugTool $debugTool
    ) {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            $this->entries[$i] = new _FieldInfo($reader);
            $this->entries[$i]->setConstantPool($constantPool);
            $this->entries[$i]->setDebugTool($debugTool);
            $this->entries[$i]->execute();
        }
    }

    public function getEntries()
    {
        return $this->entries;
    }
}
