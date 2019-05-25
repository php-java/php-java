<?php
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;

class SuperClassResolver
{
    public static function resolveDynamicMethods(string $methodName, JavaClassInterface $class)
    {
        return static::resolveMethod(
            $methodName,
            $class,
            true
        );
    }

    public static function resolveStaticMethods(string $methodName, JavaClassInterface $class)
    {
        return static::resolveMethod(
            $methodName,
            $class,
            false
        );
    }

    private static function resolveMethod(string $methodName, JavaClassInterface $class, bool $isDynamic = false, array $classes = [])
    {
        /**
         * @var JavaClass $class
         */
        if ($class->getSuperClass() === null) {
            return $classes;
        }
        $accessor = $class->getSuperClass()->getInvoker();
        $accessor = $isDynamic ? $accessor->getDynamic() : $accessor->getStatic();
        $methods = $accessor->getMethods()->getList();
        foreach ($methods as $calleeMethodName => $callee) {
            if ($methodName !== $calleeMethodName) {
                continue;
            }
            if (!isset($classes[$methodName])) {
                $classes[$methodName] = [];
            }
            $classes[$methodName] = array_merge(
                $classes[$methodName],
                $callee
            );
        }

        if ($class->isSimpleClass()) {
            return $classes;
        }

        return static::resolveMethod(
            $methodName,
            $class->getSuperClass(),
            $isDynamic,
            $classes
        );
    }
}
