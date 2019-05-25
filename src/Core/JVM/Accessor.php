<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Field\StaticField;
use PHPJava\Core\JVM\Invoker\InvokerInterface;
use PHPJava\Core\JVM\Invoker\JavaClassStaticMethodInvoker;

class Accessor implements AccessorInterface
{
    /**
     * @var StaticField
     */
    private $fieldAccessor;

    /**
     * @var JavaClassStaticMethodInvoker
     */
    private $methodAccessor;

    /**
     * @param PHPJava\Kernel\Structures\_MethodInfo[] $methods
     */
    public function __construct(
        ClassInvokerInterface $invoker,
        string $targetedMethodAccessorClass,
        string $targetedFieldAccessorClass,
        array $methods,
        array $fields,
        array $options = []
    ) {
        $this->methodAccessor = new $targetedMethodAccessorClass($invoker, $methods, $options);
        $this->fieldAccessor = new $targetedFieldAccessorClass($invoker, $fields);
    }

    public function getFields(): FieldInterface
    {
        return $this->fieldAccessor;
    }

    public function getMethods(): InvokerInterface
    {
        return $this->methodAccessor;
    }
}
