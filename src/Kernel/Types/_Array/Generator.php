<?php
namespace PHPJava\Kernel\Types\_Array;

class Generator
{
    public static function make(array $array, string $type)
    {
        $values = $array;
        foreach ($values as &$item) {
            $value = new $type($item);
        }
        return new Collection($values);
    }
}
