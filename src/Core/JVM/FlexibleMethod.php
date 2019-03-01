<?php
namespace PHPJava\Core\JVM;

class FlexibleMethod
{
    private $method;

    public function __construct(\ReflectionMethod $method)
    {
        $this->method = $method;
    }
}
