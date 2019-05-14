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
        if (!ctype_digit((string) abs($value))) {
            return false;
        }

        return $value >= static::MIN && $value <= static::MAX;
    }

    protected function filter($value)
    {
        return (int) $value;
    }
}
