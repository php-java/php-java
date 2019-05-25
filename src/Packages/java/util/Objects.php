<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\Comparator;
// use PHPJava\Packages\java\util\function\Supplier;

/**
 * The `Objects` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Objects extends _Object // implements Comparator, Supplier
{
    /**
     * Checks if the sub-range from fromIndex (inclusive) to fromIndex + size (exclusive) is within the bounds of range from 0 (inclusive) to length (exclusive).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#checkFromIndexSize
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_checkFromIndexSize($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks if the sub-range from fromIndex (inclusive) to toIndex (exclusive) is within the bounds of range from 0 (inclusive) to length (exclusive).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#checkFromToIndex
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_checkFromToIndex($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks if the index is within the bounds of the range from 0 (inclusive) to length (exclusive).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#checkIndex
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_checkIndex($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns 0 if the arguments are identical and  c.compare(a, b) otherwise.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#compare
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_compare($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the arguments are deeply equal to each other and false otherwise.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#deepEquals
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_deepEquals($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the arguments are equal to each other and false otherwise.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_equals($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Generates a hash code for a sequence of input values.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hash
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_hash($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code of a non-null argument and 0 for a null argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/Objects.html#hashCode(java.lang.Object)
     * @param null|mixed $a
     */
    public static function static_hashCode($a = null)
    {
        if ($a === null) {
            return 0;
        }

        if ($a instanceof JavaClass) {
            return $a
                ->getInvoker()
                ->getDynamic()
                ->getMethods()
                ->call('hashCode');
        }

        return $a->hashCode();
    }

    /**
     * Returns true if the provided reference is null otherwise returns false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isNull
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_isNull($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the provided reference is non-null otherwise returns false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nonNull
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_nonNull($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks that the specified object reference is not null.
     * Checks that the specified object reference is not null and throws a customized NullPointerException if it is.
     * Checks that the specified object reference is not null and throws a customized NullPointerException if it is.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#requireNonNull
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_requireNonNull($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the first argument if it is non-null and otherwise returns the non-null second argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#requireNonNullElse
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_requireNonNullElse($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the first argument if it is non-null and otherwise returns the non-null value of supplier.get().
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#requireNonNullElseGet
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_requireNonNullElseGet($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the result of calling toString for a non- null argument and "null" for a null argument.
     * Returns the result of calling toString on the first argument if the first argument is not null and returns the second argument otherwise.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_toString($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
