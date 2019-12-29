<?php

class TestCallStaticMethodsMultiplePattern2
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
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod1('Hello');
        echo ' ';
        self::doSomethingMethod1('World!');
    }
}
