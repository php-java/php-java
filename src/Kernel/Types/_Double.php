<?php

namespace PHPJava\Kernel\Types;

class _Double extends Type
{
    protected $nameInJava = 'double';
    protected $nameInPHP = 'float';

    const MIN = 4.9E-324;
    const MAX = 1.7976931348623157E308;

    public function isValid($value)
    {
        return is_numeric($value) &&
            $value >= static::MIN &&
            $value <= static::MAX;
    }

    public function filter($value)
    {
        return (string) $value;
    }
}
