<?php
namespace PHPJava\Core\JVM;

class FlexibleMethod
{
    private $object;

    /**
     * @var \ReflectionMethod
     */
    private $method;

    public function __construct($object, \ReflectionMethod $method)
    {
        $this->object = $object;
        $this->method = $method;
    }

    public function __invoke(...$arguments)
    {
        return $this->method->invokeArgs($this->object, $arguments);
    }
}
