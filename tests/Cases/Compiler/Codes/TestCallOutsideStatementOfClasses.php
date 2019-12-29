<?php

class TestCallOutsideStatementOfClasses
{
    /**
     * @param \PHPJava\Packages\java\lang\String_[] $args
     */
    public static function main($args)
    {
        echo 'Dont show.';
    }
}

echo 'Hello World!';
