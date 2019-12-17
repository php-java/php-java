<?php

class TestIfElseIfElseStatementAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        if (true) {
            echo "Hello World 1\n";
        } elseif (true) {
            echo "Hello World 2\n";
        } else {
            echo "Hello World 3\n";
        }

        $test1 = true;
        $test2 = true;
        if ($test1) {
            echo "Hello World 1\n";
        } elseif ($test2) {
            echo "Hello World 2\n";
        } else {
            echo "Hello World 3\n";
        }
    }
}
