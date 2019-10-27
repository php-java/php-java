<?php

class TestFizzBuzz
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 3) === 0) {
                echo 'Fizz';
            }
            if (($i % 5) === 0) {
                echo 'Buzz';
            }
            if (($i % 3) !== 0 && ($i % 5) !== 0) {
                echo $i;
            }
            echo "\n";
        }
    }
}
