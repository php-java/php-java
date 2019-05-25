<?php
namespace PHPJava\Packages\java\lang\Spliterators;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\Spliterator;

/**
 * The `AbstractSpliterator` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class AbstractSpliterator extends _Object // implements Spliterator
{
    /**
     * Returns a set of characteristics of this Spliterator and its elements.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#characteristics
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function characteristics($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an estimate of the number of elements that would be encountered by a Spliterator.forEachRemaining(java.util.function.Consumer&lt;? super T&gt;) traversal, or returns Long.MAX_VALUE if infinite, unknown, or too expensive to compute.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#estimateSize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function estimateSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If this spliterator can be partitioned, returns a Spliterator covering elements, that will, upon return from this method, not be covered by this Spliterator.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#trySplit
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function trySplit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
