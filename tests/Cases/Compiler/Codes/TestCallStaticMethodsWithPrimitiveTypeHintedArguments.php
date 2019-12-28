<?php

class TestCallStaticMethodsWithPrimitiveTypeHintedArguments
{
    public static function doSomethingMethod(int $argument)
    {
        echo $argument;
    }

    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod(1234);
    }
}
