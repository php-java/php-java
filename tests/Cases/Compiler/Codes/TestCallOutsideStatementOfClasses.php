<?php

class TestCallOutsideStatementOfClasses
{
    /**
     * @param \PHPJava\Packages\java\lang\_String[] $args
     */
    public static function main($args)
    {
        echo 'Dont show.';
    }
}

echo 'Hello World!';
