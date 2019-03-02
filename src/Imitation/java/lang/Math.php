<?php
namespace PHPJava\Imitation\java\lang;

class Math extends _Object
{
    public static $E = M_E;
    public static $PI = M_PI;

    /**
     * This method wrapped abs function
     *
     * @param $number
     * @return float|int
     */
    public static function abs($number)
    {
        return abs($number);
    }
}
