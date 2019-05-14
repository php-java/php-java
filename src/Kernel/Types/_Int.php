<?php

namespace PHPJava\Kernel\Types;

class _Int extends Type
{
    protected $nameInJava = 'int';
    protected $nameInPHP = 'integer';

    const MIN = -2147483648;
    const MAX = 2147483647;

    public function isValid($value)
    {
        return ctype_digit($value) &&
            $value >= static::MIN &&
            $value <= static::MAX;
    }
}
