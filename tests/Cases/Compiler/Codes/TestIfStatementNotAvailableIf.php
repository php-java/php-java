<?php

class TestIfStatementNotAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        if (false) {
            echo "Hello World!\n";
        }

        $test = false;
        if ($test) {
            echo "Hello World!\n";
        }
    }
}
