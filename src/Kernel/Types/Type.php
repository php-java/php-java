<?php
namespace PHPJava\Kernel\Types;

use PHPJava\Exceptions\TypeException;

class Type
{
    private $value = null;

    public function __construct($value)
    {
        // Validate value which is scalar.
        if (
            !is_int($value) &&
            !is_float($value) &&
            !is_string($value) &&
            !is_bool($value)
        ) {
            throw new TypeException(
                'Passed value is not scalar. The value is "' . gettype($value) . '"'
            );
        }
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string) $this->getValue();
    }
}
