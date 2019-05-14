<?php

namespace PHPJava\Kernel\Types;

class _Char extends Type
{
    protected $nameInJava = 'char';
    protected $nameInPHP = 'string';

    const MIN = 0;
    const MAX = 65535;

    public function isValid($value)
    {
        return ctype_digit($value) &&
            $value >= static::MIN &&
            $value <= static::MAX;
    }

    public function filter($value)
    {
        return (int) $value;
    }

    public function getValue()
    {
        return chr($this->value);
    }
}
