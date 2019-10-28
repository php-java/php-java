<?php

class TestIfElseIfStatementAvailableElseIf
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public function main($args)
    {
        if (false) {
            echo "Hello World 1\n";
        } elseif (true) {
            echo "Hello World 2\n";
        }

        $test1 = false;
        $test2 = true;
        if ($test1) {
            echo "Hello World 1\n";
        } elseif ($test2) {
            echo "Hello World 2\n";
        }
    }
}
