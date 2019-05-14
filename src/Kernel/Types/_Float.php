<?php

namespace PHPJava\Kernel\Types;

class _Float extends Type
{
    protected $nameInJava = 'float';
    protected $nameInPHP = 'float';

    const MIN = 1.4E-45;
    const MAX = 3.4028235E38;

    public function isValid($value)
    {
        return is_numeric($value) &&
            $value >= static::MIN &&
            $value <= static::MAX;
    }

    public function filter($value)
    {
        return (float) $value;
    }
}
