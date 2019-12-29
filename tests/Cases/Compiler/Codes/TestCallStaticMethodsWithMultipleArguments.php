<?php

class TestCallStaticMethodsWithMultipleArguments
{
    public static function doSomethingMethod(string $string1, string $string2)
    {
        echo $string1 . ' ' . $string2;
    }

    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod(
            'Hello',
            'World!'
        );
    }
}
