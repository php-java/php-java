<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\DebugTool;

class ActiveMethods
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
            $this->entries[$i] = new _MethodInfo($reader);
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
