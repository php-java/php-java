<?php
declare(strict_types=1);
namespace PHPJava\Packages\PHPJava\Kernel\Behavior;

use PHPJava\Core\JavaClass;

final class System
{
    public static function identityHashCode(JavaClass $object): int
    {
        return spl_object_id($object->getInvoker()->getClassObject());
    }
}
