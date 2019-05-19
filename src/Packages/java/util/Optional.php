<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\function\Supplier;
// use PHPJava\Packages\java\lang\Runnable;
// use PHPJava\Packages\java\util\stream\Stream;

/**
 * The `Optional` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Optional extends _Object // implements Supplier, Runnable, Stream
{
    /**
     * Returns an empty Optional instance.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#empty
     */
    public static function empty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates whether some other object is "equal to" this Optional.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, and the value matches the given predicate, returns an Optional describing the value, otherwise returns an empty Optional.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#filter
     */
    public function filter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns the result of applying the given Optional-bearing mapping function to the value, otherwise returns an empty Optional.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#flatMap
     */
    public function flatMap($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns the value, otherwise throws NoSuchElementException.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#get
     */
    public function get($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code of the value, if present, otherwise 0 (zero) if no value is present.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, performs the given action with the value, otherwise does nothing.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ifPresent
     */
    public function ifPresent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, performs the given action with the value, otherwise performs the given empty-based action.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ifPresentOrElse
     */
    public function ifPresentOrElse($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is  not present, returns true, otherwise false.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isEmpty
     */
    public function isEmpty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns true, otherwise false.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#isPresent
     */
    public function isPresent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns an Optional describing (as if by ofNullable(T)) the result of applying the given mapping function to the value, otherwise returns an empty Optional.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#map
     */
    public function map($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Optional describing the given non-null value.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#of
     */
    public static function of($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an Optional describing the given value, if non-null, otherwise returns an empty Optional.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#ofNullable
     */
    public static function ofNullable($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns an Optional describing the value, otherwise returns an Optional produced by the supplying function.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#or
     */
    public function or($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns the value, otherwise returns other.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#orElse
     */
    public function orElse($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns the value, otherwise returns the result produced by the supplying function.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#orElseGet
     */
    public function orElseGet($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns the value, otherwise throws NoSuchElementException.
     * If a value is present, returns the value, otherwise throws an exception produced by the exception supplying function.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#orElseThrow
     */
    public function orElseThrow($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If a value is present, returns a sequential Stream containing only that value, otherwise returns an empty Stream.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#stream
     */
    public function stream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a non-empty string representation of this Optional suitable for debugging.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
