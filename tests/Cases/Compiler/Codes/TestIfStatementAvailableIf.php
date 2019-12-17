<?php

class TestIfStatementAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        if (true) {
            echo "Hello World!\n";
        }

        $test = true;
        if ($test) {
            echo "Hello World!\n";
        }
    }
}
