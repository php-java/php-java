<?php
namespace PHPJava\Utilities;

use PHPJava\Kernel\Types\Type;

class Extractor
{
    public static function realValue($value)
    {
        if ($value instanceof Type) {
            return $value->getValue();
        }
        return $value;
    }
}
