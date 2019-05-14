<?php

namespace PHPJava\Kernel\Types;

class _Int extends Type
{
    protected $nameInJava = 'int';
    protected $nameInPHP = 'integer';

    const MIN = -2147483648;
    const MAX = 2147483647;

    public static function isValid($value)
    {
        if (ctype_alpha($value) && strlen($value) === 1) {
            $value = ord($value);
        }

        $value = ($value << 32) >> 32;
        if (!ctype_digit((string) abs($value))) {
            return false;
        }

        return $value >= static::MIN && $value <= static::MAX;
    }

    protected static function filter($value)
    {
        if (ctype_alpha($value) && strlen($value) === 1) {
            return ord($value);
        }

        return ($value << 32) >> 32;
    }
}
