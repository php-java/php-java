<?php
namespace PHPJava\Utilities;

class ClassResolver
{
    const MAPS = [
        'String' => '_String',
        'Object' => '_Object',
    ];

    public static function resolve($javaPath): string
    {
        $namespaces = explode('.', str_replace('/', '.', $javaPath));
        $buildClassPath = [];
        foreach ($namespaces as $namespace) {
            $buildClassPath[] = static::MAPS[$namespace] ?? $namespace;
        }
        return '\\PHPJava\\Imitation\\' . implode('\\',  $buildClassPath);
    }
}
