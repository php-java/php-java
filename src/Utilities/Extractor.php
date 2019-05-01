<?php
namespace PHPJava\Utilities;

use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\lang\_String;

class Extractor
{
    /**
     * You need to use `getRealValue` instead of `realValue`.
     *
     * @deprecated
     * @param $value
     * @return array|bool|float|int|null|Type|string
     */
    public static function realValue($value)
    {
        return static::getRealValue($value);
    }

    public static function getRealValue($value)
    {
        if ($value instanceof Type) {
            return $value->getValue();
        }
        return $value;
    }
}
