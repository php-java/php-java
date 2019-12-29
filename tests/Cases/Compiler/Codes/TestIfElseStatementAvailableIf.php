<?php

class TestIfElseStatementAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        if (true) {
            echo "Hello World 1\n";
        } else {
            echo "Hello World 2\n";
        }

        $test = true;
        if ($test) {
            echo "Hello World 1\n";
        } else {
            echo "Hello World 2\n";
        }
    }
}
