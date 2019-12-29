<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Types;

class _Char extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = 0;

    protected $nameInJava = 'char';
    protected $nameInPHP = 'string';

    const MIN = 0;
    const MAX = 65535;

    public static function isValid($value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        if (ctype_alpha($value) && strlen((string) $value) === 1) {
            $value = ord($value);
        }

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
        return $value;
    }

    public function __toString(): string
    {
        return json_decode(sprintf('"\\u%04X"', $this->value));
    }
}
