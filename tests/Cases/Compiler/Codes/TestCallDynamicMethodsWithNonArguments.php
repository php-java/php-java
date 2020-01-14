<?php

class TestCallDynamicMethodsWithNonArguments
{
    public function doSomethingMethod()
    {
        echo 'Hello World!';
    }

    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        $test = new TestCallDynamicMethodsWithNonArguments();
        $test->doSomethingMethod();
    }
}
