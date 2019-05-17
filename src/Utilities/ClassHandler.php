<?php
namespace PHPJava\Utilities;

class ClassHandler
{
    const DEFAULT_INITIALIZER = '<init>';

    public static function call(string $classPath, ...$arguments)
    {
        return new $classPath(
            static::DEFAULT_INITIALIZER,
            ...$arguments
        );
    }
}
