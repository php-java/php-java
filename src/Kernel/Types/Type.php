<?php
namespace PHPJava\Kernel\Types;

class Type
{
    private $value = null;

    public function __construct($value)
    {
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
