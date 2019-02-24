<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Imitation\java\lang\_String;
use PHPJava\Imitation\java\lang\NoSuchFieldException;

class StaticField
{
    private static $fields = [];

    private $javaClassInvoker;

    public function __construct(JavaClassInvoker $javaClassInvoker)
    {
        $this->javaClassInvoker = $javaClassInvoker;
    }

    /**
     * @param $name
     * @return mixed
     * @throws NoSuchFieldException
     */
    public function get($name)
    {
        if (!isset(static::$fields[$name])) {
            throw new NoSuchFieldException('Get to undefined static field ' . $name);
        }
        if (static::$fields[$name] instanceof _String) {
            return (string) static::$fields[$name];
        }
        return static::$fields[$name];
    }
    public function set($name, $value)
    {
        static::$fields[$name] = $value;
    }
}
