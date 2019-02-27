<?php
namespace PHPJava\Core\JVM\Invoker;

class StaticMethodInvoker implements InvokerInterface
{
    use Invokable;

    public function isDynamic(): bool
    {
        return false;
    }
}
