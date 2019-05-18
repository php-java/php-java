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
            $className = str_replace('/', '.', $this->javaClassInvoker->getJavaClass()->getClassName());
            throw new NoSuchFieldException('Get to undefined field ' . $className . '::' . $name);
        }
        if ($this->fields[$name] instanceof _String) {
            return (string) $this->fields[$name];
        }

        return $this->fields[$name];
    }
}
