<?php
namespace PHPJava\Core\JVM\Invoker;

class JavaClassDynamicMethodInvoker extends JavaClassMethodInvoker implements InvokerInterface
{
    public function isDynamic(): bool
    {
        return true;
    }
}
