<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Field\StaticField;
use PHPJava\Core\JVM\Invoker\InvokerInterface;
use PHPJava\Core\JVM\Invoker\StaticMethodInvoker;

class StaticAccessor implements AccessorInterface
{
    /**
     * @var StaticField
     */
    private $fieldAccessor;

    /**
     * @var StaticMethodInvoker
     */
    private $methodAccessor;

    /**
     * @param PHPJava\Kernel\Structures\_MethodInfo[] $methods
     */
    public function __construct(JavaClassInvoker $invoker, array $methods, array $options = [])
    {
        $this->methodAccessor = new StaticMethodInvoker($invoker, $methods, $options);
        $this->fieldAccessor = new StaticField($invoker, []);
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
