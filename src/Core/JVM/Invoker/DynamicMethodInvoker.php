<?php
namespace PHPJava\Core\JVM\Invoker;

class DynamicMethodInvoker extends Invoker implements InvokerInterface
{
    public function isDynamic(): bool
    {
        return true;
    }
}
