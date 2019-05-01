<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Number;
use PHPJava\Kernel\Types\_Int;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `_Integer` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Number
 */
class Integer extends Number /* implements Serializable, Comparable */
{
    /**
     * The number of bytes used to represent an int value in two's complement binary form.
     *
     * @var mixed $BYTES
     */
    public static $BYTES = null;

    /**
     * A constant holding the maximum value an int can have, 231-1.
     *
     * @var mixed $MAX_VALUE
     */
    public static $MAX_VALUE = null;

    /**
     * A constant holding the minimum value an int can have, -231.
     *
     * @var mixed $MIN_VALUE
     */
    public static $MIN_VALUE = null;

    /**
     * The number of bits used to represent an int value in two's complement binary form.
     *
     * @var mixed $SIZE
     */
    public static $SIZE = null;

    /**
     * The Class instance representing the primitive type int.
     *
     * @var mixed $TYPE
     */
    public static $TYPE = null;


    /**
     * Returns the number of one-bits in the two's complement binary representation of the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#bitCount
     */
    public static function static_bitCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Integer as a byte after a narrowing primitive conversion.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#byteValue
     */
    public function byteValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two int values numerically.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compare
     */
    public static function static_compare($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two Integer objects numerically.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compareTo
     */
    public function compareTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two int values numerically treating the values as unsigned.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compareUnsigned
     */
    public static function static_compareUnsigned($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Decodes a String into an Integer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#decode
     */
    public static function static_decode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unsigned quotient of dividing the first argument by the second where each argument and the result is interpreted as an unsigned value.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#divideUnsigned
     */
    public static function static_divideUnsigned($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Integer as a double after a widening primitive conversion.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#doubleValue
     */
    public function doubleValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares this object to the specified object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Integer as a float after a widening primitive conversion.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#floatValue
     */
    public function floatValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines the integer value of the system property with the specified name.
     * Determines the integer value of the system property with the specified name.
     * Returns the integer value of the system property with the specified name.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getInteger
     */
    public static function static_getInteger($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a hash code for this Integer.
     * Returns a hash code for an int value; compatible with Integer.hashCode().
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hashCode
     */
    public static function static_hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an int value with at most a single one-bit, in the position of the highest-order ("leftmost") one-bit in the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#highestOneBit
     */
    public static function static_highestOneBit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Integer as an int.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#intValue
     */
    public function intValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Integer as a long after a widening primitive conversion.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#longValue
     */
    public function longValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an int value with at most a single one-bit, in the position of the lowest-order ("rightmost") one-bit in the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lowestOneBit
     */
    public static function static_lowestOneBit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the greater of two int values as if by calling Math.max.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#max
     */
    public static function static_max($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the smaller of two int values as if by calling Math.min.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#min
     */
    public static function static_min($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of zero bits preceding the highest-order ("leftmost") one-bit in the two's complement binary representation of the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#numberOfLeadingZeros
     */
    public static function static_numberOfLeadingZeros($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of zero bits following the lowest-order ("rightmost") one-bit in the two's complement binary representation of the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#numberOfTrailingZeros
     */
    public static function static_numberOfTrailingZeros($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Parses the CharSequence argument as a signed int in the specified radix, beginning at the specified beginIndex and extending to endIndex - 1.
     * Parses the string argument as a signed decimal integer.
     * Parses the string argument as a signed integer in the radix specified by the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#parseInt
     */
    public static function static_parseInt($a = null, $b = null, $c = null, $d = null)
    {
        $number = $a;
        $radix = $b;
        if ($radix !== null) {
            $number = base_convert($number, $radix, 10);
        }
        return new _Int((string) $number);
    }

    /**
     * Parses the CharSequence argument as an unsigned int in the specified radix, beginning at the specified beginIndex and extending to endIndex - 1.
     * Parses the string argument as an unsigned decimal integer.
     * Parses the string argument as an unsigned integer in the radix specified by the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#parseUnsignedInt
     */
    public static function static_parseUnsignedInt($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unsigned remainder from dividing the first argument by the second where each argument and the result is interpreted as an unsigned value.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#remainderUnsigned
     */
    public static function static_remainderUnsigned($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value obtained by reversing the order of the bits in the two's complement binary representation of the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#reverse
     */
    public static function static_reverse($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value obtained by reversing the order of the bytes in the two's complement representation of the specified int value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#reverseBytes
     */
    public static function static_reverseBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value obtained by rotating the two's complement binary representation of the specified int value left by the specified number of bits.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#rotateLeft
     */
    public static function static_rotateLeft($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value obtained by rotating the two's complement binary representation of the specified int value right by the specified number of bits.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#rotateRight
     */
    public static function static_rotateRight($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the value of this Integer as a short after a narrowing primitive conversion.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#shortValue
     */
    public function shortValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the signum function of the specified int value.
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
     * Adds two integers together as per the + operator.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#sum
     */
    public static function static_sum($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the integer argument as an unsigned integer in base&nbsp;2.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toBinaryString
     */
    public static function static_toBinaryString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the integer argument as an unsigned integer in base&nbsp;16.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toHexString
     */
    public static function static_toHexString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the integer argument as an unsigned integer in base&nbsp;8.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toOctalString
     */
    public static function static_toOctalString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a String object representing this Integer's value.
     * Returns a String object representing the specified integer.
     * Returns a string representation of the first argument in the radix specified by the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     */
    public static function static_toString($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the argument to a long by an unsigned conversion.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toUnsignedLong
     */
    public static function static_toUnsignedLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of the argument as an unsigned decimal value.
     * Returns a string representation of the first argument as an unsigned integer value in the radix specified by the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toUnsignedString
     */
    public static function static_toUnsignedString($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Integer instance representing the specified int value.
     * Returns an Integer object holding the value of the specified String.
     * Returns an Integer object holding the value extracted from the specified String when parsed with the radix given by the second argument.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#valueOf
     */
    public static function static_valueOf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
