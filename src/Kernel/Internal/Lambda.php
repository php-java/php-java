<?php

namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClass;
use PHPJava\Utilities\ClassResolver;

class Lambda
{
    private $javaClass;
    private $name;
    private $descriptor;
    private $class;
    private $resourceType;
    private $classObject;

    public function __construct(JavaClass $javaClass, string $name, string $descriptor, string $class)
    {
        $this->javaClass = $javaClass;
        $this->name = $name;
        $this->descriptor = $descriptor;
        $this->class = $class;

        [$this->resourceType, $this->classObject] = $javaClass
            ->getOptions('class_resolver')
            ->resolve($this->class);
    }

    public function __invoke(...$arguments)
    {
        return $this->javaClass
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                $this->name,
                ...$arguments
            );
    }
}
