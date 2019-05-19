<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Core\JVM\Field\DynamicField;
use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Invoker\DynamicMethodInvoker;
use PHPJava\Core\JVM\Invoker\InvokerInterface;

class DynamicAccessor implements AccessorInterface
{
    /**
     * @var DynamicField
     */
    private $fieldAccessor;

    /**
     * @var DynamicMethodInvoker
     */
    private $methodAccessor;

    /**
     * @param PHPJava\Kernel\Structures\_MethodInfo[] $methods
     */
    public function __construct(JavaClassInvoker $invoker, array $methods, array $fields, array $options = [])
    {
        $this->methodAccessor = new DynamicMethodInvoker($invoker, $methods, $options);
        $this->fieldAccessor = new DynamicField($invoker, $fields);
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
