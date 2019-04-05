<?php
namespace PHPJava\Imitation\java\lang;

use PHPJava\Utilities\Extractor;

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
        return abs(Extractor::realValue($number));
    }

    /**
     * This decrease 1 from parameters
     *
     * @see https://docs.oracle.com/javase/jp/8/docs/api/java/lang/Math.html#decrementExact-int-
     * @param int $a
     * @return int
     */
    public static function decrementExact($a)
    {
        return Extractor::realValue($a) - 1;
    }
}
