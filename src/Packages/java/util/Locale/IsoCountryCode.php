<?php
namespace PHPJava\Packages\java\util\Locale;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `IsoCountryCode` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class IsoCountryCode extends Enum /* implements Serializable, Comparable */
{
    /*
     * PART1_ALPHA2 is used to represent the ISO3166-1 alpha-2 two letter country codes.
     */
    const PART1_ALPHA2 = 'PART1_ALPHA2';

    /*
     * PART1_ALPHA3 is used to represent the ISO3166-1 alpha-3 three letter country codes.
     */
    const PART1_ALPHA3 = 'PART1_ALPHA3';

    /*
     * PART3 is used to represent the ISO3166-3 four letter country codes.
     */
    const PART3 = 'PART3';


    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#valueOf
     */
    public static function static_valueOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array containing the constants of this enum type, inthe order they are declared.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#values
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
