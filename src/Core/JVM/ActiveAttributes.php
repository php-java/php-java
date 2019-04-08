<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Utilities\DebugTool;

class ActiveAttributes
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
            // not implemented, read only
            $this->entries[$i] = new AttributeInfo($reader);
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
