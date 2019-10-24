<?php

class TestIfElseStatementAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\_String $args
     */
    public function main($args)
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
