<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

class DynamicField implements FieldInterface
{
    use FieldGettable;
    use FieldSettable;

    private $javaClassInvoker;
    public $fields = [];

    public function __construct(JavaClassInvoker $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }
}
