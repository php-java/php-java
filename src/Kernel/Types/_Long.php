<?php
namespace PHPJava\Kernel\Types;

class _Long extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = 0;

    protected $nameInJava = 'long';
    protected $nameInPHP = 'integer';

    const MIN = PHP_INT_MIN;
    const MAX = PHP_INT_MAX;

    public static function isValid($value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        // Adjustment negative value for PHP problems
        if ($value === static::MIN) {
            $value++;
        }
        if (!ctype_digit((string) abs($value))) {
            return false;
        }
        return $value >= static::MIN && $value <= static::MAX;
    }

    protected static function filter($value)
    {
        return (int) $value;
    }
}
