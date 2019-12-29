<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker;

class PHPClassDynamicMethodInvoker extends PHPClassMethodInvoker implements InvokerInterface
{
    public function isDynamic(): bool
    {
        return true;
    }
}
