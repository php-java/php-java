<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;

class StaticField
{
    private static $fields = [];

    public function __get($name)
    {
        return static::$fields[$name];
    }
    public function __set($name, $value)
    {
        static::$fields[$name] = $value;
    }
}
