<?php
namespace PHPJava\Kernel\Types;

use PHPJava\Core\JVM\Cache\HeapCache;
use PHPJava\Exceptions\TypeException;

class Type
{
    protected $value = null;
    protected $nameInJava = null;
    protected $nameInPHP = null;

    public function __construct($value)
    {
        // Validate value which is scalar.
        if (!is_scalar($value) &&
            !is_array($value) &&
            !is_null($value) &&
            !($value instanceof self)
        ) {
            $type = gettype($value);
            throw new TypeException(
                'Passed value is not scalar or miss match type. The value is "' . ($type === 'object' ? get_class($value) : $type) . '"'
            );
        }
        $this->value = ($value instanceof self)
            ? $value->getValue()
            : $value;
    }

    public static function ensure($value)
    {
        return ($value instanceof self)
            ? $value
            : new self($value);
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getTypeNameInJava()
    {
        return $this->nameInJava;
    }


    public function getTypeNameInPHP()
    {
        return $this->nameInPHP;
    }

    public function __toString()
    {
        return (string) $this->getValue();
    }
}
