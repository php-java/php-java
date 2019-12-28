<?php

class TestCallStaticMethodsMultiplePattern1
{
    public static function doSomethingMethod1(string $arg)
    {
        echo $arg;
    }

    public static function doSomethingMethod2(string $arg)
    {
        echo $arg;
    }

    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod1('Hello');
        echo ' ';
        self::doSomethingMethod2('World!');
    }
}
