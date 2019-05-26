<?php
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\Parameters\Runtime;

class ClassResolver
{
    const MAPS = Runtime::PHP_PACKAGES_MAPS;

    // resource types
    const RESOURCE_TYPE_FILE = 'RESOURCE_TYPE_FILE';
    const RESOURCE_TYPE_JAR = 'RESOURCE_TYPE_JAR';
    const RESOURCE_TYPE_CLASS = 'RESOURCE_TYPE_CLASS';
    const RESOURCE_TYPE_INNER_CLASS = 'RESOURCE_TYPE_INNER_CLASS';

    /**
     * @var array
     */
    private static $resolves = [];

    /**
     * @var (string|JavaClass)[][]
     */
    private $resolvedPaths = [];

    /**
     * @var array
     */
    private $options = [];

    public static function getClassPaths(): array
    {
        return static::$resolves;
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
