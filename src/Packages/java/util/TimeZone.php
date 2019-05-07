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
class TimeZone extends _Object /* implements Serializable, Cloneable */
{
    /**
     * A style specifier for getDisplayName() indicating a long name, such as "Pacific Standard Time."
     *
     * @var mixed $LONG
     */
    public static $LONG = null;

    /**
     * A style specifier for getDisplayName() indicating a short name, such as "PST."
     *
     * @var mixed $SHORT
     */
    public static $SHORT = null;


    /**
     * Creates a copy of this TimeZone.
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
     * Gets all the available IDs supported.
     * Gets the available IDs according to the given time zone offset in milliseconds.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getAvailableIDs
     */
    public static function static_getAvailableIDs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the default TimeZone of the Java virtual machine.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDefault
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayName
     */
    public function getDisplayName($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the amount of time to be added to local standard time to get local wall clock time.
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
     * Gets the ID of this time zone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getID
     */
    public function getID($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the time zone offset, for current date, modified in case of daylight savings.
     * Returns the offset of this time zone from UTC at the specified date.
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
     * Returns the amount of time in milliseconds to add to UTC to get standard time in this time zone.
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
     * Gets the TimeZone for the given ID.
     * Gets the TimeZone for the given zoneId.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getTimeZone
     */
    public static function static_getTimeZone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if this zone has the same rule and offset as another zone.
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
     * Queries if the given date is in Daylight Saving Time in this time zone.
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
     * Returns true if this TimeZone is currently in Daylight Saving Time, or if a transition from Standard Time to Daylight Saving Time occurs at any future time.
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
     * Sets the TimeZone that is returned by the getDefault method.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setDefault
     */
    public static function static_setDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the time zone ID.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setID
     */
    public function setID($a = null)
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
     * Converts this TimeZone object to a ZoneId.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toZoneId
     */
    public function toZoneId($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Queries if this TimeZone uses Daylight Saving Time.
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
