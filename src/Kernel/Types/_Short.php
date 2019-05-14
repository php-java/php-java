<?php

namespace PHPJava\Kernel\Types;

class _Short extends Type
{
    protected $nameInJava = 'short';
    protected $nameInPHP = 'integer';

    const MIN = -32768;
    const MAX = 32767;

    public function isValid($value)
    {
        return ctype_digit((string) abs($value)) &&
            $value >= static::MIN &&
            $value <= static::MAX;
    }

    protected function filter($value)
    {
        return (int) $value;
    }
}
