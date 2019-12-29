<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Cloneable;

/**
 * The `SimpleTimeZone` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\TimeZone
 */
class SimpleTimeZone extends TimeZone // implements Serializable, Cloneable
{
    /**
     * Constant for a mode of start or end time specified as standard time.
     *
     * @var mixed $STANDARD_TIME
     */
    public static $STANDARD_TIME = null;

    /**
     * Constant for a mode of start or end time specified as UTC.
     *
     * @var mixed $UTC_TIME
     */
    public static $UTC_TIME = null;

    /**
     * Constant for a mode of start or end time specified as wall clock time.
     *
     * @var mixed $WALL_TIME
     */
    public static $WALL_TIME = null;

    /**
     * Returns a clone of this SimpleTimeZone instance.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clone
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function clone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares the equality of two SimpleTimeZone objects.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the amount of time in milliseconds that the clock is advanced during daylight saving time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDSTSavings
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getDSTSavings($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the difference in milliseconds between local time and UTC, taking into account both the raw offset and the effect of daylight saving, for the specified date and time.
     * Returns the offset of this time zone from UTC at the given time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getOffset
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @param null|mixed $f
     * @throws NotImplementedException
     */
    public function getOffset($a = null, $b = null, $c = null, $d = null, $e = null, $f = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the GMT offset for this time zone.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getRawOffset
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getRawOffset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Generates the hash code for the SimpleDateFormat object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this zone has the same rules and offset as another zone.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasSameRules
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasSameRules($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Queries if the given date is in daylight saving time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#inDaylightTime
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function inDaylightTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this SimpleTimeZone observes Daylight Saving Time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#observesDaylightTime
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function observesDaylightTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the amount of time in milliseconds that the clock is advanced during daylight saving time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setDSTSavings
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setDSTSavings($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the daylight saving time end rule to a fixed date within a month.
     * Sets the daylight saving time end rule.
     * Sets the daylight saving time end rule to a weekday before or after the given date within a month, e.g., the first Monday on or after the 8th.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setEndRule
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @throws NotImplementedException
     */
    public function setEndRule($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the base time zone offset to GMT.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setRawOffset
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setRawOffset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the daylight saving time start rule to a fixed date within a month.
     * Sets the daylight saving time start rule.
     * Sets the daylight saving time start rule to a weekday before or after the given date within a month, e.g., the first Monday on or after the 8th.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setStartRule
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @throws NotImplementedException
     */
    public function setStartRule($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the daylight saving time starting year.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setStartYear
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setStartYear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of this time zone.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Queries if this time zone uses daylight saving time.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#useDaylightTime
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function useDaylightTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
