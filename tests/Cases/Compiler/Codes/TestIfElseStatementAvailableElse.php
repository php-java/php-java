<?php

class TestIfElseStatementAvailableElse
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public function main($args)
    {
        if (false) {
            echo "Hello World 1\n";
        } else {
            echo "Hello World 2\n";
        }

        $test = false;
        if ($test) {
            echo "Hello World 1\n";
        } else {
            echo "Hello World 2\n";
        }
    }
}
