<?php

class TestCallStaticMethodsWithNonArguments
{
    public static function doSomethingMethod()
    {
        echo 'Hello World!';
    }

    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod();
    }
}
