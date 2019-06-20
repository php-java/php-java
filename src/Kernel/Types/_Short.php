<?php
namespace PHPJava\Kernel\Types;

class _Short extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = 0;

    protected $nameInJava = 'short';
    protected $nameInPHP = 'integer';

    const MIN = -32768;
    const MAX = 32767;

    public static function isValid($value): bool
    {
        return ctype_digit((string) abs($value)) &&
            $value >= static::MIN &&
            $value <= static::MAX;
    }

    protected static function filter($value)
    {
        return (int) $value;
    }
}
