<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Imitation\java\lang\_String;

class StaticField
{
    use FieldGettable;
    use FieldSettable;

    private $javaClassInvoker;
    public $fields = [];

    public function __construct(JavaClassInvoker $javaClassInvoker)
    {
        $this->javaClassInvoker = $javaClassInvoker;
    }
}
