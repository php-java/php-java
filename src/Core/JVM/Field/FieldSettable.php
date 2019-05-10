<?php
namespace PHPJava\Core\JVM\Field;

trait FieldSettable
{
    public function set(string $name, $value)
    {
        $this->fields[$name] = $value;
        return $this;
    }
}
