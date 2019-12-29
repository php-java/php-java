<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Types;

class Short_ extends Type implements PrimitiveValueInterface
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
