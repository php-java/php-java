<?php

class TestCallStaticMethodsWithTypeHintedArguments
{
    public static function doSomethingMethod(string $argument)
    {
        echo $argument;
    }

    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod('Hello World!');
    }
}
