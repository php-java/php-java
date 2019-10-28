<?php

class TestIfStatementNotAvailableIf
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public function main($args)
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
