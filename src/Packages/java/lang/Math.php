<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Utilities\Extractor;

/**
 * The `Math` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Math extends _Object
{
    /**
     * The double value that is closer than any other to e, the base of the natural logarithms.
     *
     * @var mixed $E
     */
    public static $E = M_E;

    /**
     * The double value that is closer than any other to pi, the ratio of the circumference of a circle to its diameter.
     *
     * @var mixed $PI
     */
    public static $PI = M_PI;


    /**
     * Returns the absolute value of a double value.
     * Returns the absolute value of a float value.
     * Returns the absolute value of an int value.
     * Returns the absolute value of a long value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#abs(double)
     */
    public static function static_abs($a = null)
    {
        return abs(Extractor::realValue($a));
    }

    /**
     * Returns the arc cosine of a value; the returned angle is in the range 0.0 through pi.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#acos(double)
     */
    public static function static_acos($a = null)
    {
        return acos(Extractor::realValue($a));
    }

    /**
     * Returns the sum of its arguments, throwing an exception if the result overflows an int.
     * Returns the sum of its arguments, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#addExact(int,int)
     */
    public static function static_addExact($a = null, $b = null)
    {
        return Extractor::realValue($a) + Extractor::realValue($b);
    }

    /**
     * Returns the arc sine of a value; the returned angle is in the range -pi/2 through pi/2.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#asin(double)
     */
    public static function static_asin($a = null)
    {
        return asin(Extractor::realValue($a));
    }

    /**
     * Returns the arc tangent of a value; the returned angle is in the range -pi/2 through pi/2.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#atan(double)<Paste>
     */
    public static function static_atan($a = null)
    {
        return atan(Extractor::realValue($a));
    }

    /**
     * Returns the angle theta from the conversion of rectangular coordinates (x,&nbsp;y) to polar coordinates (r,&nbsp;theta).
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#atan2(double,double)
     */
    public static function static_atan2($a = null, $b = null)
    {
        return atan2(Extractor::realValue($a), Extractor::realValue($b));
    }

    /**
     * Returns the cube root of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#cbrt(double)
     */
    public static function static_cbrt($a = null)
    {
        $a = Extractor::realValue($a);

        if ($a >= 0) {
            return pow($a, 1 / 3);
        }

        return -pow(abs($a), 1 / 3);
    }

    /**
     * Returns the smallest (closest to negative infinity) double value that is greater than or equal to the argument and is equal to a mathematical integer.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#ceil(double)
     */
    public static function static_ceil($a = null)
    {
        return ceil(Extractor::realValue($a));
    }

    /**
     * Returns the first floating-point argument with the sign of the second floating-point argument.
     * Returns the first floating-point argument with the sign of the second floating-point argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#copySign
     */
    public static function static_copySign($a = null, $b = null)
    {
        $magnitude = Extractor::realValue($a);
        $sign = Extractor::realValue($b);

        return $sign >= 0 ? abs($magnitude) : -abs($magnitude);
    }

    /**
     * Returns the trigonometric cosine of an angle.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#cos(double)
     */
    public static function static_cos($a = null)
    {
        return cos(Extractor::realValue($a));
    }

    /**
     * Returns the hyperbolic cosine of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#cosh(double)
     */
    public static function static_cosh($a = null)
    {
        return cosh(Extractor::realValue($a));
    }

    /**
     * Returns the argument decremented by one, throwing an exception if the result overflows an int.
     * Returns the argument decremented by one, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#decrementExact(int)
     */
    public static function static_decrementExact($a = null)
    {
        return Extractor::realValue($a) - 1;
    }

    /**
     * Returns Euler's number e raised to the power of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#exp(double)
     */
    public static function static_exp($a = null)
    {
        return exp(Extractor::realValue($a));
    }

    /**
     * Returns ex&nbsp;-1.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#expm1(double)
     */
    public static function static_expm1($a = null)
    {
        return expm1(Extractor::realValue($a));
    }

    /**
     * Returns the largest (closest to positive infinity) double value that is less than or equal to the argument and is equal to a mathematical integer.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#floor(double)
     */
    public static function static_floor($a = null)
    {
        return floor(Extractor::realValue($a));
    }

    /**
     * Returns the largest (closest to positive infinity) int value that is less than or equal to the algebraic quotient.
     * Returns the largest (closest to positive infinity) long value that is less than or equal to the algebraic quotient.
     * Returns the largest (closest to positive infinity) long value that is less than or equal to the algebraic quotient.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#floorDiv(int,int)
     */
    public static function static_floorDiv($a = null, $b = null)
    {
        $a = Extractor::realValue($a);
        $b = Extractor::realValue($b);

        return (int) floor($a / $b);
    }

    /**
     * Returns the floor modulus of the int arguments.
     * Returns the floor modulus of the long and int arguments.
     * Returns the floor modulus of the long arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#floorMod(int,int)
     */
    public static function static_floorMod($a = null, $b = null)
    {
        $a = Extractor::realValue($a);
        $b = Extractor::realValue($b);

        return $a - static::static_floorDiv($a, $b) * $b;
    }

    /**
     * Returns the fused multiply add of the three arguments; that is, returns the exact product of the first two arguments summed with the third argument and then rounded once to the nearest double.
     * Returns the fused multiply add of the three arguments; that is, returns the exact product of the first two arguments summed with the third argument and then rounded once to the nearest float.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#fma
     */
    public static function static_fma($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unbiased exponent used in the representation of a double.
     * Returns the unbiased exponent used in the representation of a float.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getExponent
     */
    public static function static_getExponent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns sqrt(x2&nbsp;+y2) without intermediate overflow or underflow.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hypot
     */
    public static function static_hypot($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Computes the remainder operation on two arguments as prescribed by the IEEE 754 standard.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#IEEEremainder
     */
    public static function static_IEEEremainder($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the argument incremented by one, throwing an exception if the result overflows an int.
     * Returns the argument incremented by one, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#incrementExact(int)
     */
    public static function static_incrementExact($a = null)
    {
        return Extractor::realValue($a) + 1;
    }

    /**
     * Returns the natural logarithm (base e) of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#log(double)
     */
    public static function static_log($a = null)
    {
        return log(Extractor::realValue($a));
    }

    /**
     * Returns the base 10 logarithm of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#log10(double)
     */
    public static function static_log10($a = null)
    {
        return log10(Extractor::realValue($a));
    }

    /**
     * Returns the natural logarithm of the sum of the argument and 1.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#log1p(double)
     */
    public static function static_log1p($a = null)
    {
        return log1p(Extractor::realValue($a));
    }

    /**
     * Returns the greater of two double values.
     * Returns the greater of two float values.
     * Returns the greater of two int values.
     * Returns the greater of two long values.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#max(double,double)
     */
    public static function static_max($a = null, $b = null)
    {
        return max(Extractor::realValue($a), Extractor::realValue($b));
    }

    /**
     * Returns the smaller of two double values.
     * Returns the smaller of two float values.
     * Returns the smaller of two int values.
     * Returns the smaller of two long values.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#min(double,double)
     */
    public static function static_min($a = null, $b = null)
    {
        return min(Extractor::realValue($a), Extractor::realValue($b));
    }

    /**
     * Returns the product of the arguments, throwing an exception if the result overflows an int.
     * Returns the product of the arguments, throwing an exception if the result overflows a long.
     * Returns the product of the arguments, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#multiplyExact(int,int)
     */
    public static function static_multiplyExact($a = null, $b = null)
    {
        return Extractor::realValue($a) * Extractor::realValue($b);
    }

    /**
     * Returns the exact mathematical product of the arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#multiplyFull(int,int)
     */
    public static function static_multiplyFull($a = null, $b = null)
    {
        return Extractor::realValue($a) * Extractor::realValue($b);
    }

    /**
     * Returns as a long the most significant 64 bits of the 128-bit product of two 64-bit factors.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#multiplyHigh
     */
    public static function static_multiplyHigh($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the negation of the argument, throwing an exception if the result overflows an int.
     * Returns the negation of the argument, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#negateExact
     */
    public static function static_negateExact($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floating-point number adjacent to the first argument in the direction of the second argument.
     * Returns the floating-point number adjacent to the first argument in the direction of the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nextAfter
     */
    public static function static_nextAfter($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floating-point value adjacent to d in the direction of negative infinity.
     * Returns the floating-point value adjacent to f in the direction of negative infinity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nextDown
     */
    public static function static_nextDown($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the floating-point value adjacent to d in the direction of positive infinity.
     * Returns the floating-point value adjacent to f in the direction of positive infinity.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nextUp
     */
    public static function static_nextUp($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the first argument raised to the power of the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#pow(double,double)
     */
    public static function static_pow($a = null, $b = null)
    {
        return pow(Extractor::realValue($a), Extractor::realValue($b));
    }

    /**
     * Returns a double value with a positive sign, greater than or equal to 0.0 and less than 1.0.
     *
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#random()
     */
    public static function static_random()
    {
        return mt_rand() / mt_getrandmax();
    }

    /**
     * Returns the double value that is closest in value to the argument and is equal to a mathematical integer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#rint
     */
    public static function static_rint($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the closest long to the argument, with ties rounding to positive infinity.
     * Returns the closest int to the argument, with ties rounding to positive infinity.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#round(double)
     */
    public static function static_round($a = null)
    {
        return round(Extractor::realValue($a));
    }

    /**
     * Returns d &times; 2scaleFactor rounded as if performed by a single correctly rounded floating-point multiply to a member of the double value set.
     * Returns f &times; 2scaleFactor rounded as if performed by a single correctly rounded floating-point multiply to a member of the float value set.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#scalb
     */
    public static function static_scalb($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the signum function of the argument; zero if the argument is zero, 1.0 if the argument is greater than zero, -1.0 if the argument is less than zero.
     * Returns the signum function of the argument; zero if the argument is zero, 1.0f if the argument is greater than zero, -1.0f if the argument is less than zero.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#signum
     */
    public static function static_signum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the trigonometric sine of an angle.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#sin(double)
     */
    public static function static_sin($a = null)
    {
        return sin(Extractor::realValue($a));
    }

    /**
     * Returns the hyperbolic sine of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#sinh(double)
     */
    public static function static_sinh($a = null)
    {
        return sinh(Extractor::realValue($a));
    }

    /**
     * Returns the correctly rounded positive square root of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#sqrt(double)
     */
    public static function static_sqrt($a = null)
    {
        return sqrt(Extractor::realValue($a));
    }

    /**
     * Returns the difference of the arguments, throwing an exception if the result overflows an int.
     * Returns the difference of the arguments, throwing an exception if the result overflows a long.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#subtractExact(int,int)
     */
    public static function static_subtractExact($a = null, $b = null)
    {
        return Extractor::realValue($a) - Extractor::realValue($b);
    }

    /**
     * Returns the trigonometric tangent of an angle.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#tan(double)
     */
    public static function static_tan($a = null)
    {
        return tan(Extractor::realValue($a));
    }

    /**
     * Returns the hyperbolic tangent of a double value.
     *
     * @param mixed $a
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/Math.html#tanh(double)
     */
    public static function static_tanh($a = null)
    {
        return tanh(Extractor::realValue($a));
    }

    /**
     * Converts an angle measured in radians to an approximately equivalent angle measured in degrees.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toDegrees
     */
    public static function static_toDegrees($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of the long argument; throwing an exception if the value overflows an int.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toIntExact
     */
    public static function static_toIntExact($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts an angle measured in degrees to an approximately equivalent angle measured in radians.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toRadians
     */
    public static function static_toRadians($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the size of an ulp of the argument.
     * Returns the size of an ulp of the argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#ulp
     */
    public static function static_ulp($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
