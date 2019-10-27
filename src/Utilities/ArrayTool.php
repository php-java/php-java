<?php
namespace PHPJava\Utilities;

class ArrayTool
{
    public static function concat(&$operations, ...$concatOperations): void
    {
        if (empty($concatOperations)) {
            return;
        }

        array_push(
            $operations,
            ...$concatOperations
        );
    }

    public static function stringify(array $array): string
    {
        return implode(
            array_map(
                static function ($value) {
                    if (is_object($value)) {
                        return spl_object_hash($value);
                    }
                    if (is_array($value)) {
                        return static::stringify($value);
                    }
                    return $value;
                },
                $array
            )
        );
    }

    public static function compare(array $array1, array $array2): bool
    {
        return static::stringify($array1) === static::stringify($array2);
    }
}
