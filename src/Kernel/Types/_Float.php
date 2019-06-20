<?php
namespace PHPJava\Kernel\Types;

class _Float extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = 0;

    protected $nameInJava = 'float';
    protected $nameInPHP = 'float';

    const MIN = 1.4E-45;
    const MAX = 3.4028235E38;

    public static function isValid($value): bool
    {
        $value = (string) abs($value);
        if (!is_numeric($value)) {
            return false;
        }

        return $value == 0 || ($value >= static::MIN && $value <= static::MAX);
    }

    protected static function filter($value)
    {
        return (float) $value;
    }
}
