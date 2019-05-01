<?php
namespace PHPJava\Utilities;

use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\lang\_String;

class Extractor
{
    public static function getRealValue($value)
    {
        if ($value instanceof Type) {
            return $value->getValue();
        }
        return $value;
    }

    public static function extractUtf8IfThisIsString($value)
    {
        if ($value instanceof _String) {
            // NOTE: "object" property can be access from ReflectionProperty only.
            $reflectionProperty = (new \ReflectionClass($value))->getProperty('object');
            $reflectionProperty->setAccessible(true);
            $result = $reflectionProperty->getValue($value);
            if ($result instanceof _Utf8) {
                return $result;
            }
        }
        return $value;
    }
}
