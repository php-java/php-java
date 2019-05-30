<?php
namespace PHPJava\Tests\Helpers;

trait MakeUnicodeChar
{
    private function makeUnicodeChar($codePoint)
    {
        return json_decode(sprintf('"\u%04X"', $codePoint));
    }
}
