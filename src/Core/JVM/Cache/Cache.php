<?php
namespace PHPJava\Core\JVM\Cache;

class Cache
{
    private static $items = [];

    public static function fetchOrPush(string $key, callable $pushFunction, ...$parameters)
    {
        if (isset(self::$items[$key])) {
            return self::$items[$key];
        }
        return self::$items[$key] = $pushFunction(...$parameters);
    }
}
