<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClass;

interface InvokerInterface
{
    public function __construct(JavaClass $javaClass, array $methods);
    public function __call($name, $arguments);
}
