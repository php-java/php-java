<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `Spliterator` interface was auto generated.
 */
interface Spliterator
{
    /**
     * Returns a set of characteristics of this Spliterator and its elements.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#characteristics
     * @NotImplemented
     */
    // public function characteristics($a = null)

    /**
     * Returns an estimate of the number of elements that would be encountered by a forEachRemaining(java.util.function.Consumer&lt;? super T&gt;) traversal, or returns Long.MAX_VALUE if infinite, unknown, or too expensive to compute.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#estimateSize
     * @NotImplemented
     */
    // public function estimateSize($a = null)

    /**
     * Performs the given action for each remaining element, sequentially in the current thread, until all elements have been processed or the action throws an exception.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#forEachRemaining
     * @NotImplemented
     */
    // public function forEachRemaining($a = null)

    /**
     * If this Spliterator's source is SORTED by a Comparator, returns that Comparator.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getComparator
     * @NotImplemented
     */
    // public function getComparator($a = null)

    /**
     * Convenience method that returns estimateSize() if this Spliterator is SIZED, else -1.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getExactSizeIfKnown
     * @NotImplemented
     */
    // public function getExactSizeIfKnown($a = null)

    /**
     * Returns true if this Spliterator's characteristics() contain all of the given characteristics.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasCharacteristics
     * @NotImplemented
     */
    // public function hasCharacteristics($a = null)

    /**
     * If a remaining element exists, performs the given action on it, returning true; else returns false.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#tryAdvance
     * @NotImplemented
     */
    // public function tryAdvance($a = null)

    /**
     * If this spliterator can be partitioned, returns a Spliterator covering elements, that will, upon return from this method, not be covered by this Spliterator.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#trySplit
     * @NotImplemented
     */
    // public function trySplit($a = null)
}
