<?php

namespace PHPJava\Kernel\Types;

class _Boolean extends Type
{
    protected $nameInJava = 'boolean';
    protected $nameInPHP = 'boolean';

    const TRUE = 'true';
    const FALSE = 'false';

    public static function isValid($value)
    {
        return $value == 0 ||
            $value == 1 ||
            $value === true ||
            $value === false;
    }

    protected static function filter($value)
    {
        return $value ? true : false;
    }

    public function getValue()
    {
        return $this->value
            ? static::TRUE
            : static::FALSE;
    }
}
