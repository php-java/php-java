<?php
namespace PHPJava\Tests\Helpers;

trait GetField
{
    private function getStaticField($name)
    {
        return static::$initiatedJavaClasses[$this->fixtures[0]]
            ->getInvoker()
            ->getStatic()
            ->getFields()
            ->get($name);
    }

    private function getDynamicField($name)
    {
        static $instance = null;
        if ($instance === null) {
            $instance = static::$initiatedJavaClasses[$this->fixtures[0]]
                ->getInvoker()
                ->construct();
        }
        return $instance
            ->getDynamic()
            ->getFields()
            ->get($name);
    }
}
