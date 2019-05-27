<?php
namespace PHPJava\Kernel\Resolvers;

class MethodNameResolver
{
    const PHP_METHOD_MAP = [
        '__construct' => '<init>',
        '__staticConstruct' => '<clinit>',
    ];

    public static function resolve(string $name): string
    {
        $flipped = array_flip(static::PHP_METHOD_MAP);
        if (isset($flipped[$name])) {
            return $flipped[$name];
        }
        return $name;
    }

    public static function isSpecialMethod(string $name): bool
    {
        $flipped = array_flip(static::PHP_METHOD_MAP);
        return isset($flipped[$name]);
    }
}
