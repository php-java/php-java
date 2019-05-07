<?php
namespace PHPJava\Packages\java\io\ObjectInputFilter;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Enum;

// use PHPJava\Packages\java\io\ObjectInputFilter;
// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `Status` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\lang\Enum
 */
class Status extends Enum /* implements ObjectInputFilter, Comparable */
{
    /*
     * The status is allowed.
     */
    const ALLOWED = 'ALLOWED';

    /*
     * The status is rejected.
     */
    const REJECTED = 'REJECTED';

    /*
     * The status is undecided, not allowed and not rejected.
     */
    const UNDECIDED = 'UNDECIDED';


    /**
     * Returns the enum constant of this type with the specified name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#valueOf
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#values
     */
    public static function static_values($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
