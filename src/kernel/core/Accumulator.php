<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;

trait Accumulator
{
    private $javaClass;
    private $reader;
    private $localStorage;
    private $pointer;

    public function setParameters(
        JavaClass $javaClass,
        \PHPJava\Core\JVM\Stream\BinaryReader $reader,
        array $localStorage,
        int $pointer
    ): self {
        $this->javaClass = $javaClass;
        $this->reader = $reader;
        $this->localStorage = $localStorage;
        $this->pointer = $pointer;
        return $this;
    }
}
