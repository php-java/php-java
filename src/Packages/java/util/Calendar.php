<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;
// use PHPJava\Packages\java\util\Set;

/**
 * The `Calendar` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Calendar extends _Object /* implements Serializable, Comparable, Set */
{
    /**
     * A style specifier for getDisplayNames indicating names in all styles, such as "January" and "Jan".
     *
     * @var mixed $ALL_STYLES
     */
    public static $ALL_STYLES = null;

    /**
     * Value of the AM_PM field indicating the period of the day from midnight to just before noon.
     *
     * @var mixed $AM
     */
    public static $AM = null;

    /**
     * Field number for get and set indicating whether the HOUR is before or after noon.
     *
     * @var mixed $AM_PM
     */
    public static $AM_PM = null;

    /**
     * Value of the MONTH field indicating the fourth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $APRIL
     */
    public static $APRIL = null;

    /**
     * True if fields[] are in sync with the currently set time.
     *
     * @var mixed $areFieldsSet
     */
    protected $areFieldsSet = null;

    /**
     * Value of the MONTH field indicating the eighth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $AUGUST
     */
    public static $AUGUST = null;

    /**
     * Field number for get and set indicating the day of the month.
     *
     * @var mixed $DATE
     */
    public static $DATE = null;

    /**
     * Field number for get and set indicating the day of the month.
     *
     * @var mixed $DAY_OF_MONTH
     */
    public static $DAY_OF_MONTH = null;

    /**
     * Field number for get and set indicating the day of the week.
     *
     * @var mixed $DAY_OF_WEEK
     */
    public static $DAY_OF_WEEK = null;

    /**
     * Field number for get and set indicating the ordinal number of the day of the week within the current month.
     *
     * @var mixed $DAY_OF_WEEK_IN_MONTH
     */
    public static $DAY_OF_WEEK_IN_MONTH = null;

    /**
     * Field number for get and set indicating the day number within the current year.
     *
     * @var mixed $DAY_OF_YEAR
     */
    public static $DAY_OF_YEAR = null;

    /**
     * Value of the MONTH field indicating the twelfth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $DECEMBER
     */
    public static $DECEMBER = null;

    /**
     * Field number for get and set indicating the daylight saving offset in milliseconds.
     *
     * @var mixed $DST_OFFSET
     */
    public static $DST_OFFSET = null;

    /**
     * Field number for get and set indicating the era, e.g., AD or BC in the Julian calendar.
     *
     * @var mixed $ERA
     */
    public static $ERA = null;

    /**
     * Value of the MONTH field indicating the second month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $FEBRUARY
     */
    public static $FEBRUARY = null;

    /**
     * The number of distinct fields recognized by get and set.
     *
     * @var mixed $FIELD_COUNT
     */
    public static $FIELD_COUNT = null;

    /**
     * The calendar field values for the currently set time for this calendar.
     *
     * @var mixed $fields
     */
    protected $fields = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Friday.
     *
     * @var mixed $FRIDAY
     */
    public static $FRIDAY = null;

    /**
     * Field number for get and set indicating the hour of the morning or afternoon.
     *
     * @var mixed $HOUR
     */
    public static $HOUR = null;

    /**
     * Field number for get and set indicating the hour of the day.
     *
     * @var mixed $HOUR_OF_DAY
     */
    public static $HOUR_OF_DAY = null;

    /**
     * The flags which tell if a specified calendar field for the calendar is set.
     *
     * @var mixed $isSet
     */
    protected $isSet = null;

    /**
     * True if then the value of time is valid.
     *
     * @var mixed $isTimeSet
     */
    protected $isTimeSet = null;

    /**
     * Value of the MONTH field indicating the first month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $JANUARY
     */
    public static $JANUARY = null;

    /**
     * Value of the MONTH field indicating the seventh month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $JULY
     */
    public static $JULY = null;

    /**
     * Value of the MONTH field indicating the sixth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $JUNE
     */
    public static $JUNE = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames equivalent to LONG_FORMAT.
     *
     * @var mixed $LONG
     */
    public static $LONG = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames indicating a long name used for format.
     *
     * @var mixed $LONG_FORMAT
     */
    public static $LONG_FORMAT = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames indicating a long name used independently, such as a month name as calendar headers.
     *
     * @var mixed $LONG_STANDALONE
     */
    public static $LONG_STANDALONE = null;

    /**
     * Value of the MONTH field indicating the third month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $MARCH
     */
    public static $MARCH = null;

    /**
     * Value of the MONTH field indicating the fifth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $MAY
     */
    public static $MAY = null;

    /**
     * Field number for get and set indicating the millisecond within the second.
     *
     * @var mixed $MILLISECOND
     */
    public static $MILLISECOND = null;

    /**
     * Field number for get and set indicating the minute within the hour.
     *
     * @var mixed $MINUTE
     */
    public static $MINUTE = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Monday.
     *
     * @var mixed $MONDAY
     */
    public static $MONDAY = null;

    /**
     * Field number for get and set indicating the month.
     *
     * @var mixed $MONTH
     */
    public static $MONTH = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames indicating a narrow name used for format.
     *
     * @var mixed $NARROW_FORMAT
     */
    public static $NARROW_FORMAT = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames indicating a narrow name independently.
     *
     * @var mixed $NARROW_STANDALONE
     */
    public static $NARROW_STANDALONE = null;

    /**
     * Value of the MONTH field indicating the eleventh month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $NOVEMBER
     */
    public static $NOVEMBER = null;

    /**
     * Value of the MONTH field indicating the tenth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $OCTOBER
     */
    public static $OCTOBER = null;

    /**
     * Value of the AM_PM field indicating the period of the day from noon to just before midnight.
     *
     * @var mixed $PM
     */
    public static $PM = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Saturday.
     *
     * @var mixed $SATURDAY
     */
    public static $SATURDAY = null;

    /**
     * Field number for get and set indicating the second within the minute.
     *
     * @var mixed $SECOND
     */
    public static $SECOND = null;

    /**
     * Value of the MONTH field indicating the ninth month of the year in the Gregorian and Julian calendars.
     *
     * @var mixed $SEPTEMBER
     */
    public static $SEPTEMBER = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames equivalent to SHORT_FORMAT.
     *
     * @var mixed $SHORT
     */
    public static $SHORT = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames indicating a short name used for format.
     *
     * @var mixed $SHORT_FORMAT
     */
    public static $SHORT_FORMAT = null;

    /**
     * A style specifier for getDisplayName and getDisplayNames indicating a short name used independently, such as a month abbreviation as calendar headers.
     *
     * @var mixed $SHORT_STANDALONE
     */
    public static $SHORT_STANDALONE = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Sunday.
     *
     * @var mixed $SUNDAY
     */
    public static $SUNDAY = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Thursday.
     *
     * @var mixed $THURSDAY
     */
    public static $THURSDAY = null;

    /**
     * The currently set time for this calendar, expressed in milliseconds after January 1, 1970, 0:00:00 GMT.
     *
     * @var mixed $time
     */
    protected $time = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Tuesday.
     *
     * @var mixed $TUESDAY
     */
    public static $TUESDAY = null;

    /**
     * Value of the MONTH field indicating the thirteenth month of the year.
     *
     * @var mixed $UNDECIMBER
     */
    public static $UNDECIMBER = null;

    /**
     * Value of the DAY_OF_WEEK field indicating Wednesday.
     *
     * @var mixed $WEDNESDAY
     */
    public static $WEDNESDAY = null;

    /**
     * Field number for get and set indicating the week number within the current month.
     *
     * @var mixed $WEEK_OF_MONTH
     */
    public static $WEEK_OF_MONTH = null;

    /**
     * Field number for get and set indicating the week number within the current year.
     *
     * @var mixed $WEEK_OF_YEAR
     */
    public static $WEEK_OF_YEAR = null;

    /**
     * Field number for get and set indicating the year.
     *
     * @var mixed $YEAR
     */
    public static $YEAR = null;

    /**
     * Field number for get and set indicating the raw offset from GMT in milliseconds.
     *
     * @var mixed $ZONE_OFFSET
     */
    public static $ZONE_OFFSET = null;


    /**
     * Adds or subtracts the specified amount of time to the given calendar field, based on the calendar's rules.
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
     * Returns whether this Calendar represents a time after the time represented by the specified Object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#after
     */
    public function after($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns whether this Calendar represents a time before the time represented by the specified Object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#before
     */
    public function before($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets all the calendar field values and the time value (millisecond offset from the Epoch) of this Calendar undefined.
     * Sets the given calendar field value and the time value (millisecond offset from the Epoch) of this Calendar undefined.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clear
     */
    public function clear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates and returns a copy of this object.
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
     * Compares the time values (millisecond offsets from the Epoch) represented by two Calendar objects.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#compareTo
     */
    public function compareTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Fills in any unset fields in the calendar fields.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#complete
     */
    protected function complete($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the current millisecond time value time to calendar field values in fields[].
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
     * Converts the current calendar field values in fields[] to the millisecond time value time.
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
     * Compares this Calendar to the specified Object.
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
     * Returns the value of the given calendar field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#get
     */
    public function get($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the maximum value that the specified calendar field could have, given the time value of this Calendar.
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
     * Returns the minimum value that the specified calendar field could have, given the time value of this Calendar.
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
     * Returns an unmodifiable Set containing all calendar types supported by Calendar in the runtime environment.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getAvailableCalendarTypes
     */
    public static function static_getAvailableCalendarTypes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of all locales for which the getInstance methods of this class can return localized instances.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getAvailableLocales
     */
    public static function static_getAvailableLocales($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the calendar type of this Calendar.
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
     * Returns the string representation of the calendar field value in the given style and locale.
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
     * Returns a Map containing all names of the calendar field in the given style and locale and their corresponding field values.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getDisplayNames
     */
    public function getDisplayNames($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets what the first day of the week is; e.g., SUNDAY in the U.S., MONDAY in France.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getFirstDayOfWeek
     */
    public function getFirstDayOfWeek($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the highest minimum value for the given calendar field of this Calendar instance.
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
     * Gets a calendar using the default time zone and locale.
     * Gets a calendar using the default time zone and specified locale.
     * Gets a calendar using the specified time zone and default locale.
     * Gets a calendar with the specified time zone and locale.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getInstance
     */
    public static function static_getInstance($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the lowest maximum value for the given calendar field of this Calendar instance.
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
     * Returns the maximum value for the given calendar field of this Calendar instance.
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
     * Gets what the minimal days required in the first week of the year are; e.g., if the first week is defined as one that contains the first day of the first month of a year, this method returns 1.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getMinimalDaysInFirstWeek
     */
    public function getMinimalDaysInFirstWeek($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the minimum value for the given calendar field of this Calendar instance.
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
     * Returns a Date object representing this Calendar's time value (millisecond offset from the Epoch").
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getTime
     */
    public function getTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this Calendar's time value in milliseconds.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getTimeInMillis
     */
    public function getTimeInMillis($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the time zone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getTimeZone
     */
    public function getTimeZone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of weeks in the week year represented by this Calendar.
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
     * Returns the week year represented by this Calendar.
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
     * Returns a hash code for this calendar.
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
     * Returns the value of the given calendar field.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#internalGet
     */
    protected function internalGet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether date/time interpretation is to be lenient.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isLenient
     */
    public function isLenient($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the given calendar field has a value set, including cases that the value has been set by internal fields calculations triggered by a get method call.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isSet
     */
    public function isSet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns whether this Calendar supports week dates.
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
     * Adds the specified (signed) amount to the specified calendar field without changing larger fields.
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
     * Sets the given calendar field to the given value.
     * Sets the values for the calendar fields YEAR, MONTH, and DAY_OF_MONTH.
     * Sets the values for the calendar fields YEAR, MONTH, DAY_OF_MONTH, HOUR_OF_DAY, and MINUTE.
     * Sets the values for the fields YEAR, MONTH, DAY_OF_MONTH, HOUR_OF_DAY, MINUTE, and SECOND.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#set
     */
    public function set($a = null, $b = null, $c = null, $d = null, $e = null, $f = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets what the first day of the week is; e.g., SUNDAY in the U.S., MONDAY in France.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setFirstDayOfWeek
     */
    public function setFirstDayOfWeek($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specifies whether or not date/time interpretation is to be lenient.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setLenient
     */
    public function setLenient($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets what the minimal days required in the first week of the year are; For example, if the first week is defined as one that contains the first day of the first month of a year, call this method with value 1.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setMinimalDaysInFirstWeek
     */
    public function setMinimalDaysInFirstWeek($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets this Calendar's time with the given Date.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setTime
     */
    public function setTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets this Calendar's current time from the given long value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setTimeInMillis
     */
    public function setTimeInMillis($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the time zone with the given time zone value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setTimeZone
     */
    public function setTimeZone($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the date of this Calendar with the given date specifiers - week year, week of year, and day of week.
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
     * Converts this object to an Instant.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toInstant
     */
    public function toInstant($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Return a string representation of this calendar.
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
}
