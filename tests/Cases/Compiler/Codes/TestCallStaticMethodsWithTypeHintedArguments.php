<?php

class TestCallStaticMethodsWithTypeHintedArguments
{
    public static function doSomethingMethod(string $argument)
    {
        echo $argument;
    }

    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod('Hello World!');
    }
}
