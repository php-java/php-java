<?php
namespace PHPJava\Utilities;

use PHPJava\Kernel\Types\Type;

class Extractor
{
    /**
     * You need to use `getRealValue` instead of `realValue`.
     *
     * @deprecated
     * @param $value
     * @return null|array|bool|float|int|string|Type
     */
    public static function realValue($value)
    {
        return static::getRealValue($value);
    }

    public static function getRealValue($value)
    {
        if ($value instanceof Type) {
            return TypeResolver::extractPrimitiveValueFromType($value);
        }
        return $value;
    }
}
