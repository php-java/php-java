<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Field;

trait FieldListable
{
    public function getList(): array
    {
        return $this->fields;
    }
}
