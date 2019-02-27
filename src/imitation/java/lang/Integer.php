<?php
namespace PHPJava\Imitation\java\lang;

class Integer extends Number
{
    public static function parseInt(string $number, int $radix = null)
    {
        if ($radix !== null) {
            $number = base_convert($number, $radix, 10);
        }
        return (int) $number;
    }
}
