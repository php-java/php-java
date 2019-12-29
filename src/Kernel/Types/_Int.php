<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Types;

class _Int extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = 0;

    protected $nameInJava = 'int';
    protected $nameInPHP = 'integer';

    const MIN = -2147483648;
    const MAX = 2147483647;

    public static function isValid($value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }
        if (ctype_alpha($value) && strlen((string) $value) === 1) {
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
        if (ctype_alpha($value) && strlen((string) $value) === 1) {
            return ord($value);
        }

        return ($value << 32) >> 32;
    }
}
