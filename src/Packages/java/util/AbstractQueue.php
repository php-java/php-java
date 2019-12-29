<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\lang\Iterable;
// use PHPJava\Packages\java\util\Collection;

/**
 * The `AbstractQueue` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\util\AbstractCollection
 */
class AbstractQueue extends AbstractCollection // implements Iterable, Collection
{
    /**
     * Inserts the specified element into this queue if it is possible to do so immediately without violating capacity restrictions, returning true upon success and throwing an IllegalStateException if no space is currently available.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#add
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function add($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Adds all of the elements in the specified collection to this queue.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#addAll
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function addAll($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes all of the elements from this queue.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clear
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function clear($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves, but does not remove, the head of this queue.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#element
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function element($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves and removes the head of this queue.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#remove
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function remove($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
