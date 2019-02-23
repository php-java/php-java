<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClass;

trait Invokable
{
    private $methods = [];
    public function __construct(JavaClass $javaClass, array $methods)
    {
        $this->methods = $methods;
    }

    public function __call($methodName, $arguments)
    {

    }
}
