<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClassInvoker;

interface InvokerInterface
{
    public function __construct(JavaClassInvoker $javaClassInvoker, array $methods, array &$debugTraces);
    public function __call($name, $arguments);
}
