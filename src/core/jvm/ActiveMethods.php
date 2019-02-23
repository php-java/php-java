<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassReader;
use PHPJava\Kernel\Structures\_MethodInfo;

class ActiveMethods
{
    private $entries = [];
    private $reader;

    public function __construct(JavaClassReader $reader, int $entries, ConstantPool $constantPool)
    {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            // not implemented, read only
            $this->entries[$i] = new _MethodInfo($reader);
            $this->entries[$i]->setConstantPool($constantPool);
            $this->entries[$i]->execute();
        }
    }
}
