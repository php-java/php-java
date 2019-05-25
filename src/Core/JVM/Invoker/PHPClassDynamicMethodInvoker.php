<?php
namespace PHPJava\Core\JVM\Invoker;

class PHPClassDynamicMethodInvoker extends PHPClassMethodInvoker implements InvokerInterface
{
    public function isDynamic(): bool
    {
        return true;
    }
}
