<?php
namespace PHPJava\Core\JVM\Field;

trait FieldListable
{
    public function getList(): array
    {
        return $this->fields;
    }
}
