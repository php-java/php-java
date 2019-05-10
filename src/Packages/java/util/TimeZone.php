<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Cloneable;

/**
 * The `TimeZone` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class TimeZone extends _Object // implements Serializable, Cloneable
{
    /**
     * A style specifier for getDisplayName() indicating a long name, such as "Pacific Standard Time.".
     *
     * @var mixed $LONG
     */
    public static $LONG = null;

    /**
     * A style specifier for getDisplayName() indicating a short name, such as "PST.".
     *
     * @var mixed $SHORT
     */
    public static $SHORT = null;

    /**
     * Creates a copy of this TimeZone.
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
     * Gets all the available IDs supported.
     * Gets the available IDs according to the given time zone offset in milliseconds.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getAvailableIDs
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getAvailableIDs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the default TimeZone of the Java virtual machine.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDefault
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a long standard time name of this TimeZone suitable for presentation to the user in the default locale.
     * Returns a name in the specified style of this TimeZone suitable for presentation to the user in the default locale.
     * Returns a name in the specified style of this TimeZone suitable for presentation to the user in the specified  locale.
     * Returns a long standard time name of this TimeZone suitable for presentation to the user in the specified locale.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayName
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function getDisplayName($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the amount of time to be added to local standard time to get local wall clock time.
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
     * Gets the ID of this time zone.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getID
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getID($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the time zone offset, for current date, modified in case of daylight savings.
     * Returns the offset of this time zone from UTC at the specified date.
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
     * Returns the amount of time in milliseconds to add to UTC to get standard time in this time zone.
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
     * Gets the TimeZone for the given ID.
     * Gets the TimeZone for the given zoneId.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getTimeZone
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getTimeZone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this zone has the same rule and offset as another zone.
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
     * Queries if the given date is in Daylight Saving Time in this time zone.
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
     * Returns true if this TimeZone is currently in Daylight Saving Time, or if a transition from Standard Time to Daylight Saving Time occurs at any future time.
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
     * Sets the TimeZone that is returned by the getDefault method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setDefault
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the time zone ID.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setID
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setID($a = null)
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
     * Converts this TimeZone object to a ZoneId.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toZoneId
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toZoneId($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Queries if this TimeZone uses Daylight Saving Time.
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
