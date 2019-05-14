<?php

namespace PHPJava\Kernel\Types;

class _Byte extends Type
{
    protected $nameInJava = 'byte';
    protected $nameInPHP = 'int';

    const MIN = -128;
    const MAX = 127;

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
}
