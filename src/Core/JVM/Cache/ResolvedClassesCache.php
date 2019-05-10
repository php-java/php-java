<?php
namespace PHPJava\Core\JVM\Cache;

class ResolvedClassesCache extends Cache
{
    public static function resolve(string $classPath, callable $callback)
    {
        static $cache = null;
        if ($cache === null) {
            $cache = new static();
        }
        return $cache->fetchOrPush($classPath, $callback);
    }
}
