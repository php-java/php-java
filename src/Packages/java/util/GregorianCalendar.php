<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\util\Calendar;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `GregorianCalendar` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\Calendar
 */
class GregorianCalendar extends Calendar /* implements Serializable, Comparable */
{
    /**
     * Value of the ERA field indicating the common era (Anno Domini), also known as CE.
     *
     * @var mixed $AD
     */
    public static $AD = null;

    /**
     * Value of the ERA field indicating the period before the common era (before Christ), also known as BCE.
     *
     * @var mixed $BC
     */
    public static $BC = null;


    /**
     * Adds the specified (signed) amount of time to the given calendar field, based on the calendar's rules.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#add
     */
    public function add($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the time value (millisecond offset from the Epoch) to calendar field values.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#computeFields
     */
    protected function computeFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts calendar field values to the time value (millisecond offset from the Epoch).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#computeTime
     */
    protected function computeTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares this GregorianCalendar to the specified Object.
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
     * Obtains an instance of GregorianCalendar with the default locale from a ZonedDateTime object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#from
     */
    public static function static_from($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the maximum value that this calendar field could have, taking into consideration the given time value and the current values of the getFirstDayOfWeek, getMinimalDaysInFirstWeek, getGregorianChange and getTimeZone methods.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getActualMaximum
     */
    public function getActualMaximum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the minimum value that this calendar field could have, taking into consideration the given time value and the current values of the getFirstDayOfWeek, getMinimalDaysInFirstWeek, getGregorianChange and getTimeZone methods.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getActualMinimum
     */
    public function getActualMinimum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns "gregory" as the calendar type.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getCalendarType
     */
    public function getCalendarType($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the highest minimum value for the given calendar field of this GregorianCalendar instance.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getGreatestMinimum
     */
    public function getGreatestMinimum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the Gregorian Calendar change date.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getGregorianChange
     */
    public function getGregorianChange($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the lowest maximum value for the given calendar field of this GregorianCalendar instance.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getLeastMaximum
     */
    public function getLeastMaximum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the maximum value for the given calendar field of this GregorianCalendar instance.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getMaximum
     */
    public function getMaximum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the minimum value for the given calendar field of this GregorianCalendar instance.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getMinimum
     */
    public function getMinimum($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of weeks in the week year represented by this GregorianCalendar.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getWeeksInWeekYear
     */
    public function getWeeksInWeekYear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the week year represented by this GregorianCalendar.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getWeekYear
     */
    public function getWeekYear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Generates the hash code for this GregorianCalendar object.
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
     * Determines if the given year is a leap year.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isLeapYear
     */
    public function isLeapYear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true indicating this GregorianCalendar supports week dates.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isWeekDateSupported
     */
    public function isWeekDateSupported($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adds or subtracts (up/down) a single unit of time on the given time field without changing larger fields.
     * Adds a signed amount to the specified calendar field without changing larger fields.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#roll
     */
    public function roll($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the GregorianCalendar change date.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setGregorianChange
     */
    public function setGregorianChange($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets this GregorianCalendar to the date given by the date specifiers - weekYear, weekOfYear, and dayOfWeek.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setWeekDate
     */
    public function setWeekDate($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts this object to a ZonedDateTime that represents the same point on the time-line as this GregorianCalendar.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toZonedDateTime
     */
    public function toZonedDateTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
