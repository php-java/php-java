<?php
namespace PHPJava\CompilerMethodCallTest;

class TestCallStaticMethodsWithArgumentsAndNamespace
{
    /**
     * @param \PHPJava\Packages\java\lang\String_ $string
     */
    public static function doSomethingMethod($string)
    {
        echo $string;
    }

    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        self::doSomethingMethod('Hello World!');
    }
}
