<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Types\_Array;

class Generator
{
    public static function make(array $array, string $type): Collection
    {
        $values = $array;
        foreach ($values as &$item) {
            $value = new $type($item);
        }
        return new Collection($values);
    }
}
