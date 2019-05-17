<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClassInvoker;

interface InvokerInterface
{
    /**
     * @param PHPJava\Kernel\Structures\_MethodInfo[] $methods
     */
    public function __construct(JavaClassInvoker $javaClassInvoker, array $methods);

    public function call(string $name, ...$arguments);

    public function isDynamic(): bool;

    /**
     * @return PHPJava\Kernel\Structures\_MethodInfo[]
     */
    public function getList(): array;

    public function has(string $name): bool;
}
