<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

trait FieldSettable
{
    public function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }
}
