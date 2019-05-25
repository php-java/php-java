<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JVM\ClassInvokerInterface;

class JavaDynamicField implements FieldInterface
{
    use FieldGettable;
    use FieldSettable;

    /**
     * @var ClassInvokerInterface
     */
    private $javaClassInvoker;

    /**
     * @var mixed[]
     */
    private $fields = [];

    public function __construct(ClassInvokerInterface $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }
}
