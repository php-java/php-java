<?php
namespace PHPJava\Packages\java\util\Spliterators;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\Spliterator;
// use PHPJava\Packages\java\util\function\DoubleConsumer;

/**
 * The `AbstractDoubleSpliterator` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class AbstractDoubleSpliterator extends _Object /* implements Spliterator, DoubleConsumer */
{

    /**
     * Returns a set of characteristics of this Spliterator and its elements.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#characteristics
     */
    public function characteristics($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an estimate of the number of elements that would be encountered by a Spliterator.forEachRemaining(java.util.function.Consumer&lt;? super T&gt;) traversal, or returns Long.MAX_VALUE if infinite, unknown, or too expensive to compute.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#estimateSize
     */
    public function estimateSize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If this spliterator can be partitioned, returns a Spliterator covering elements, that will, upon return from this method, not be covered by this Spliterator.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#trySplit
     */
    public function trySplit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
