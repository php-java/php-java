<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Provider\ProviderInterface;

interface JavaClassInvokerInterface
{
    public function __construct(JavaClassInterface $javaClass, array $options);

    public function getJavaClass(): JavaClassInterface;

    public function construct(...$arguments): JavaClassInvokerInterface;

    /**
     * @return AccessorInterface|DynamicAccessor
     */
    public function getDynamic(): AccessorInterface;

    /**
     * @return AccessorInterface|StaticAccessor
     */
    public function getStatic(): AccessorInterface;

    public function getProvider(string $providerName): ProviderInterface;
}
