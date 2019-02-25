<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

trait FieldSettable
{
    public function set(string $name, $value)
    {
        $this->fields[$name] = $value;
    }
}
