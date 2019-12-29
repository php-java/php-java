<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Types;

class Boolean_ extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = false;

    protected $nameInJava = 'boolean';
    protected $nameInPHP = 'boolean';

    const TRUE = 'true';
    const FALSE = 'false';

    public static function isValid($value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        return $value == 0 ||
            $value == 1 ||
            $value === true ||
            $value === false;
    }

    protected static function filter($value)
    {
        return $value ? true : false;
    }

    public function getValue()
    {
        return $this->value
            ? static::TRUE
            : static::FALSE;
    }
}
