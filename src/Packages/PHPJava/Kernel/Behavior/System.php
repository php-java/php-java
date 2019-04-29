<?php
namespace PHPJava\Packages\PHPJava\Generic\Behavior;

final class System
{
    public static function identityHashCode($object)
    {
        return spl_object_id($object);
    }
}
