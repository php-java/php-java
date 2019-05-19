<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Packages\java\lang\NoSuchFieldException;

trait FieldGettable
{
    /**
     * @throws NoSuchFieldException
     */
    public function get(string $name)
    {
        if (!array_key_exists($name, $this->fields)) {
            throw new NoSuchFieldException('Get to undefined field ' . $name);
        }

        return $this->fields[$name];
    }
}
