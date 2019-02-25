<?php
namespace PHPJava\Core\JVM\Field;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Imitation\java\lang\_String;
use PHPJava\Imitation\java\lang\NoSuchFieldException;

class StaticField
{
    public $fields = [];

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
    public function get(string $name)
    {
        if (!isset($this->fields[$name])) {
            throw new NoSuchFieldException('Get to undefined static field ' . $name);
        }
        if ($this->fields[$name] instanceof _String) {
            return (string) $this->fields[$name];
        }
        return $this->fields[$name];
    }

    public function set(string $name, $value)
    {
        $this->fields[$name] = $value;
        return $this;
    }
}
