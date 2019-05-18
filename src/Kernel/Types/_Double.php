<?php
namespace PHPJava\Kernel\Types;

use Brick\Math\BigDecimal;

class _Double extends Type
{
    const DEFAULT_VALUE = 0;

    protected $nameInJava = 'double';
    protected $nameInPHP = 'float';

    const MIN = '4.9E-324';
    const MAX = '1.7976931348623157E308';

    public static function isValid($value): bool
    {
        if (!is_numeric((string) abs($value))) {
            return false;
        }

        $value = BigDecimal::of($value)->abs();

        return $value->isEqualTo('0') || (
            $value->isGreaterThan(static::MIN) &&
            $value->isLessThan(static::MAX)
        );
    }

    protected static function filter($value)
    {
        return (string) $value;
    }
}
