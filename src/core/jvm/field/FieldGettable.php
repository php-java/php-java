<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

trait FieldGettable
{
    public function get(string $name)
    {
        return $this->fields[$name];
    }
}
