<?php
namespace PHPJava\Utilities;

use PHPJava\Packages\java\lang\_Object;

class ClassHandler
{
    const DEFAULT_INITIALIZER = '<init>';
    const DEFAULT_STATIC_INITIALIZER = '<clinit>';

    public static function initialize(string $classPath, ...$arguments)
    {
        return new $classPath(
            static::DEFAULT_INITIALIZER,
            ...$arguments
        );
    }

    // TODO: Refactoring
    public static function getStaticMethod(string $classPath, string $methodName, ...$arguments)
    {
        /**
         * @var _Object $classPath
         */
        $classPath::__staticConstruct();
        return $classPath::$methodName(...$arguments);
    }

    // TODO: Refactoring
    public static function getStaticField(string $classPath, string $fieldName)
    {
        /**
         * @var _Object $classPath
         */
        $classPath::__staticConstruct();
        return $classPath::${$fieldName};
    }
}
