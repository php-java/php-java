<?php
namespace PHPJava\CompilerMethodCallTest;

class TestCallStaticMethodsWithArgumentsAndNamespace
{
    /**
     * @param \PHPJava\Packages\java\lang\_String $string
     */
    public static function doSomethingMethod($string)
    {
        echo $string;
    }

    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod('Hello World!');
    }
}
