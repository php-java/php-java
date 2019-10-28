<?php

class TestIfElseIfStatementAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public function main($args)
    {
        if (true) {
            echo "Hello World!\n";
        } elseif (true) {
            echo "Hello World!\n";
        }

        $test = true;
        if ($test) {
            echo "Hello World!\n";
        } elseif ($test) {
            echo "Hello World!\n";
        }
    }
}
