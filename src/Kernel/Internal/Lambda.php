<?php

namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;

class Lambda
{
    private $javaClass;
    private $name;
    private $descriptor;
    private $class;

    public function __construct(JavaClass $javaClass, string $name, string $descriptor, string $class)
    {
        $this->javaClass = $javaClass;
        $this->name = $name;
        $this->descriptor = $descriptor;
        $this->class = $class;
    }

    public function __invoke(...$arguments)
    {
        var_dump($arguments);
        exit();
    }
}
