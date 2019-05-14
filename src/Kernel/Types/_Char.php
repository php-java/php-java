<?php

namespace PHPJava\Kernel\Types;

class _Char extends Type
{
    protected $nameInJava = 'char';
    protected $nameInPHP = 'string';

    const MIN = 0;
    const MAX = 65535;

    public static function isValid($value)
    {
        if (ctype_alpha($value) && strlen($value) === 1) {
            $value = ord($value);
        }

        if (!ctype_digit((string) abs($value))) {
            return false;
        }

        return $value >= static::MIN && $value <= static::MAX;
    }

    protected static function filter($value)
    {
        if (ctype_alpha($value) && strlen($value) === 1) {
            return $value;
        }
        return chr($value);
    }
}
