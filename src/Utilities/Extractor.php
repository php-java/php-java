<?php
namespace PHPJava\Utilities;

use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Types\Type;

class Extractor
{
    /**
     * You need to use `getRealValue` instead of `realValue`.
     *
     * @deprecated
     * @return null|array|bool|float|int|string
     */
    public static function realValue($value)
    {
        return static::getRealValue($value);
    }

    /**
     * @return null|array|bool|float|int|string
     */
    public static function getRealValue($value)
    {
        if ($value instanceof Type) {
            return TypeResolver::extractPrimitiveValueFromType($value);
        }
        return $value;
    }
}
