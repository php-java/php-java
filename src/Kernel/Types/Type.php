<?php
namespace PHPJava\Kernel\Types;

use PHPJava\Exceptions\TypeException;

class Type
{
    protected $value = null;
    protected $nameInJava = null;
    protected $nameInPHP = null;

    public function __construct($value)
    {
        // Validate value which is scalar.
        if (!is_int($value) &&
            !is_float($value) &&
            !is_string($value) &&
            !is_bool($value) &&
            !($value instanceof self)
        ) {
            throw new TypeException(
                'Passed value is not scalar. The value is "' . gettype($value) . '"'
            );
        }
        $this->value = ($value instanceof self)
            ? $value->getValue()
            : $value;
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
