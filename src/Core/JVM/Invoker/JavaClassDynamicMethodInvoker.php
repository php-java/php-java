<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker;

class JavaClassDynamicMethodInvoker extends JavaClassMethodInvoker implements InvokerInterface
{
    public function isDynamic(): bool
    {
        return true;
    }
}
