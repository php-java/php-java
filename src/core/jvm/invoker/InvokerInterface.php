<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClassInvoker;

interface InvokerInterface
{
    public function __construct(JavaClassInvoker $javaClassInvoker, array $methods);
    public function call(string $name, ...$arguments);
    public function isDynamic(): bool;
}
