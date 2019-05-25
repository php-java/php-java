<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JVM\ClassInvokerInterface;

interface InvokerInterface
{
    /**
     * @param PHPJava\Kernel\Structures\_MethodInfo[] $methods
     */
    public function __construct(ClassInvokerInterface $javaClassInvoker, array $methods);

    public function call(string $name, ...$arguments);

    public function isDynamic(): bool;

    /**
     * @return PHPJava\Kernel\Structures\_MethodInfo[]
     */
    public function getList(): array;

    public function has(string $name): bool;

    public function callStaticInitializerIfNotInstantiated(): InvokerInterface;

    public function getAnnotations(string $name): array;
}
