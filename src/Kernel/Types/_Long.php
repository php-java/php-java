<?php

namespace PHPJava\Kernel\Types;

class _Long extends Type
{
    protected $nameInJava = 'long';
    protected $nameInPHP = 'integer';

    const MIN = -9223372036854775808;
    const MAX = 9223372036854775807;

    public function isValid($value)
    {
        if (!ctype_digit((string) abs($value))) {
            return false;
        }
        return $value >= static::MIN && $value <= static::MAX;
    }

    protected function filter($value)
    {
        return (string) ((int) $value);
    }
}
