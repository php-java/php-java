<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\util\TimeZone;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Cloneable;

/**
 * The `SimpleTimeZone` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\TimeZone
 */
class SimpleTimeZone extends TimeZone /* implements Serializable, Cloneable */
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
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clone
     */
    public function clone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares the equality of two SimpleTimeZone objects.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the amount of time in milliseconds that the clock is advanced during daylight saving time.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDSTSavings
     */
    public function getDSTSavings($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the difference in milliseconds between local time and UTC, taking into account both the raw offset and the effect of daylight saving, for the specified date and time.
     * Returns the offset of this time zone from UTC at the given time.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getOffset
     */
    public function getOffset($a = null, $b = null, $c = null, $d = null, $e = null, $f = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the GMT offset for this time zone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getRawOffset
     */
    public function getRawOffset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Generates the hash code for the SimpleDateFormat object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this zone has the same rules and offset as another zone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasSameRules
     */
    public function hasSameRules($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Queries if the given date is in daylight saving time.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#inDaylightTime
     */
    public function inDaylightTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this SimpleTimeZone observes Daylight Saving Time.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#observesDaylightTime
     */
    public function observesDaylightTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the amount of time in milliseconds that the clock is advanced during daylight saving time.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setDSTSavings
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setEndRule
     */
    public function setEndRule($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the base time zone offset to GMT.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setRawOffset
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setStartRule
     */
    public function setStartRule($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the daylight saving time starting year.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setStartYear
     */
    public function setStartYear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of this time zone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Queries if this time zone uses daylight saving time.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#useDaylightTime
     */
    public function useDaylightTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
