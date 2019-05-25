<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JVM\Field\JavaDynamicField;
use PHPJava\Core\JVM\Field\JavaStaticField;
use PHPJava\Core\JVM\Field\PHPDynamicField;
use PHPJava\Core\JVM\Field\PHPStaticField;
use PHPJava\Kernel\Provider\ProviderInterface;

interface ClassInvokerInterface
{
    public function __construct(JavaClassInterface $javaClass, array $options);

    public function getJavaClass(): JavaClassInterface;

    public function construct(...$arguments): ClassInvokerInterface;

    /**
     * @return AccessorInterface|JavaDynamicField|PHPDynamicField
     */
    public function getDynamic(): AccessorInterface;

    /**
     * @return AccessorInterface|JavaStaticField|PHPStaticField
     */
    public function getStatic(): AccessorInterface;

    public function getProvider(string $providerName): ProviderInterface;
}
