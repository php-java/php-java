<?php
namespace PHPJava\Core\JVM;

class FlexibleMethod
{
    /**
     * @var \ReflectionMethod $method
     */
    private $method;

    private $object;

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
