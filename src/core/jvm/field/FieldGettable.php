<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

trait FieldGettable
{
    private $javaClassInvoker;
    private $fields = [];

    public function __construct(JavaClassInvoker $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }

    public function __get($name)
    {
        return $this->fields[$name];
    }
}
