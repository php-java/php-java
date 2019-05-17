<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

class DynamicField implements FieldInterface
{
    use FieldGettable;
    use FieldSettable;

    /**
     * @var JavaClassInvoker
     */
    private $javaClassInvoker;

    /**
     * @var mixed[]
     */
    private $fields = [];

    public function __construct(JavaClassInvoker $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }
}
