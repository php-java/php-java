<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\util\Observer;

/**
 * The `Observable` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class Observable extends Object_ // implements Observer
{
    /**
     * Deprecated.Adds an observer to the set of observers for this object, provided that it is not the same as some observer already in the set.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#addObserver
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function addObserver($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Indicates that this object has no longer changed, or that it has already notified all of its observers of its most recent change, so that the hasChanged method will now return false.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#clearChanged
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function clearChanged($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Returns the number of observers of this Observable object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#countObservers
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function countObservers($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Deletes an observer from the set of observers of this object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#deleteObserver
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function deleteObserver($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Clears the observer list so that this object no longer has any observers.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#deleteObservers
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function deleteObservers($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Tests if this object has changed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hasChanged
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hasChanged($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.If this object has changed, as indicated by the hasChanged method, then notify all of its observers and then call the clearChanged method to indicate that this object has no longer changed.
     * Deprecated.If this object has changed, as indicated by the hasChanged method, then notify all of its observers and then call the clearChanged method to indicate that this object has no longer changed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#notifyObservers
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function notifyObservers($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Marks this Observable object as having been changed; the hasChanged method will now return true.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#setChanged
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function setChanged($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
