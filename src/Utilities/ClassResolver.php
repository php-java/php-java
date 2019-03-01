<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassReader;

class ClassResolver
{
    const MAPS = [
        'String' => '_String',
        'Object' => '_Object',
    ];

    // resource types
    const RESOURCE_TYPE_FILE = 'RESOURCE_TYPE_FILE';

    // resolved types
    const RESOLVED_TYPE_CLASS = 'RESOLVED_TYPE_CLASS';
    const RESOLVED_TYPE_IMITATION = 'RESOLVED_TYPE_IMITATION';

    private static $resolves = [];
    private static $resolvedPaths = [];

    public static function resolve(string $javaPath, JavaClass $class = null): array
    {
        $namespaces = explode('.', str_replace('/', '.', $javaPath));
        $buildClassPath = [];
        foreach ($namespaces as $namespace) {
            $buildClassPath[] = static::MAPS[$namespace] ?? $namespace;
        }

        // resolve something approaching
        $relativePath = implode('/', $namespaces);
        foreach (static::$resolves as [$resourceType, $value]) {
            switch ($resourceType) {
                case static::RESOURCE_TYPE_FILE:
                    $path = realpath($value . '/' . $relativePath . '.class');
                    if (($key = array_search($path, static::$resolvedPaths, true)) !== false) {
                        return static::$resolvedPaths[$key];
                    }
                    if (is_file($path)) {
                        $initiatedClass = new JavaClass(new JavaClassReader($path));
                        if (strpos($relativePath, '$') !== false && $class !== null) {
                            $initiatedClass->setParentClass($class);
                        }
                        return $resolvedPaths[] = [
                            static::RESOLVED_TYPE_CLASS,
                            $initiatedClass,
                        ];
                    }
                    break;
            }
        }

        $className = '\\PHPJava\\Imitation\\' . implode('\\', $buildClassPath);

        if (!class_exists($className)) {
            throw new \PHPJava\Imitation\java\lang\ClassNotFoundException(str_replace(['\\PHPJava\\Imitation\\', '\\'], ['', '.'], $className) . ' class does not exist.');
        }

        return [
            static::RESOLVED_TYPE_IMITATION,
            $className,
        ];
    }

    public static function add($valuesOrResourceType = self::RESOURCE_TYPE_FILE, $value = null): void
    {
        if (is_array($valuesOrResourceType)) {
            foreach ($valuesOrResourceType as [$resourceType, $value]) {
                static::add($resourceType, $value);
            }

            return;
        }

        if (in_array([$valuesOrResourceType, $value], static::$resolves, true)) {
            return;
        }
        static::$resolves[] = [$valuesOrResourceType, $value];
    }
}
