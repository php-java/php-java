<?php
namespace PHPJava\Utilities;

class MethodNameResolver
{
    const PHP_METHOD_MAP = [
        '__construct' => '<init>',
    ];

    public static function resolve(string $name): string
    {
        $flipped = array_flip(static::PHP_METHOD_MAP);
        if (isset($flipped[$name])) {
            return $flipped[$name];
        }
        return $name;
    }
}
