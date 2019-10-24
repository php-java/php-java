<?php

class TestIfElseIfElseStatementAvailableElse
{
    /**
     * @param \PHPJava\Packages\java\lang\_String $args
     */
    public function main($args)
    {
        if (false) {
            echo "Hello World 1\n";
        } elseif (false) {
            echo "Hello World 2\n";
        } else {
            echo "Hello World 3\n";
        }

        $test1 = false;
        $test2 = false;
        if ($test1) {
            echo "Hello World 1\n";
        } elseif ($test2) {
            echo "Hello World 2\n";
        } else {
            echo "Hello World 3\n";
        }
    }
}
