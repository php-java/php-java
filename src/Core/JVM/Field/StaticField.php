<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JVM\JavaClassInvokerInterface;

class StaticField implements FieldInterface
{
    use FieldGettable;
    use FieldSettable;

    /**
     * @var JavaClassInvokerInterface
     */
    private $javaClassInvoker;

    /**
     * @var mixed[]
     */
    private $fields = [];

    public function __construct(JavaClassInvokerInterface $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }
}
