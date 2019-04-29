<?php
namespace PHPJava\Packages\PHPJava\Generic\Behavior;

final class System
{
    /**
     * @param $object
     * @return int
     */
    public static function identityHashCode($object): int
    {
        return spl_object_id($object);
    }
}
