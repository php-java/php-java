<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Packages\java\lang\_String;

class StaticField implements FieldInterface
{
    use FieldGettable;
    use FieldSettable;

    private $javaClassInvoker;
    private $fields = [];

    public function __construct(JavaClassInvoker $javaClassInvoker, array $fields)
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->fields = $fields;
    }
}
