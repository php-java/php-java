<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Packages\java\lang\_String;
use PHPJava\Packages\java\lang\NoSuchFieldException;

trait FieldGettable
{
    /**
     * @throws NoSuchFieldException
     */
    public function get(string $name)
    {
        if (!isset($this->fields[$name])) {
            throw new NoSuchFieldException('Get to undefined Field ' . $name);
        }
        if ($this->fields[$name] instanceof _String) {
            return (string) $this->fields[$name];
        }
        return $this->fields[$name];
    }
}
