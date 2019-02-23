<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

trait FieldGettable
{
    public function __get($name)
    {
        return $this->fields[$name];
    }
}
