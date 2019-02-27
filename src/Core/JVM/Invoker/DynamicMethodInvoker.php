<?php
namespace PHPJava\Core\JVM\Invoker;

class DynamicMethodInvoker implements InvokerInterface
{
    use Invokable;

    public function isDynamic(): bool
    {
        return true;
    }
}
