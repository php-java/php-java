<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `Comparator` interface was auto generated.
 */
interface Comparator
{
    /**
     * Compares its two arguments for order.
     *
     * @param mixed $a
     * @param mixed $b
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#compare
     * @NotImplemented
     */
    // public function compare($a = null, $b = null)

    /**
     * Accepts a function that extracts a Comparable sort key from a type T, and returns a  Comparator&lt;T&gt; that compares by that sort key.
     * Accepts a function that extracts a sort key from a type T, and returns a Comparator&lt;T&gt; that compares by that sort key using the specified Comparator.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#comparing
     * @NotImplemented
     */
    // public static function comparing($a = null, $b = null, $c = null)

    /**
     * Accepts a function that extracts a double sort key from a type T, and returns a Comparator&lt;T&gt; that compares by that sort key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#comparingDouble
     * @NotImplemented
     */
    // public static function comparingDouble($a = null)

    /**
     * Accepts a function that extracts an int sort key from a type T, and returns a Comparator&lt;T&gt; that compares by that sort key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#comparingInt
     * @NotImplemented
     */
    // public static function comparingInt($a = null)

    /**
     * Accepts a function that extracts a long sort key from a type T, and returns a Comparator&lt;T&gt; that compares by that sort key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#comparingLong
     * @NotImplemented
     */
    // public static function comparingLong($a = null)

    /**
     * Indicates whether some other object is &quot;equal to&quot; this comparator.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
     * @NotImplemented
     */
    // public function equals($a = null)

    /**
     * Returns a comparator that compares Comparable objects in natural order.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#naturalOrder
     * @NotImplemented
     */
    // public static function naturalOrder($a = null)

    /**
     * Returns a null-friendly comparator that considers null to be less than non-null.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nullsFirst
     * @NotImplemented
     */
    // public static function nullsFirst($a = null)

    /**
     * Returns a null-friendly comparator that considers null to be greater than non-null.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#nullsLast
     * @NotImplemented
     */
    // public static function nullsLast($a = null)

    /**
     * Returns a comparator that imposes the reverse ordering of this comparator.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#reversed
     * @NotImplemented
     */
    // public function reversed($a = null)

    /**
     * Returns a comparator that imposes the reverse of the natural ordering.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#reverseOrder
     * @NotImplemented
     */
    // public static function reverseOrder($a = null)

    /**
     * Returns a lexicographic-order comparator with another comparator.
     * Returns a lexicographic-order comparator with a function that extracts a Comparable sort key.
     * Returns a lexicographic-order comparator with a function that extracts a key to be compared with the given Comparator.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#thenComparing
     * @NotImplemented
     */
    // public function thenComparing($a = null, $b = null, $c = null)

    /**
     * Returns a lexicographic-order comparator with a function that extracts a double sort key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#thenComparingDouble
     * @NotImplemented
     */
    // public function thenComparingDouble($a = null)

    /**
     * Returns a lexicographic-order comparator with a function that extracts an int sort key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#thenComparingInt
     * @NotImplemented
     */
    // public function thenComparingInt($a = null)

    /**
     * Returns a lexicographic-order comparator with a function that extracts a long sort key.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#thenComparingLong
     * @NotImplemented
     */
    // public function thenComparingLong($a = null)
}
