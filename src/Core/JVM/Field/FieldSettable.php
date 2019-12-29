<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Field;

trait FieldSettable
{
    public function set(string $name, $value)
    {
        $this->fields[$name] = $value;
        return $this;
    }
}
