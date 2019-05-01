<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\Thread\UncaughtExceptionHandler;

/**
 * The `ThreadGroup` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ThreadGroup extends _Object /* implements UncaughtExceptionHandler */
{

    /**
     * Returns an estimate of the number of active threads in this thread group and its subgroups.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#activeCount
     */
    public function activeCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an estimate of the number of active groups in this thread group and its subgroups.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#activeGroupCount
     */
    public function activeGroupCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.The definition of this call depends on suspend(),             which is deprecated.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#allowThreadSuspension
     */
    public function allowThreadSuspension($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the currently running thread has permission to modify this thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkAccess
     */
    public function checkAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Destroys this thread group and all of its subgroups.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroy
     */
    public function destroy($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Copies into the specified array every active thread in this thread group and its subgroups.
     * Copies into the specified array every active thread in this thread group.
     * Copies into the specified array references to every active subgroup in this thread group and its subgroups.
     * Copies into the specified array references to every active subgroup in this thread group.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#enumerate
     */
    public function enumerate($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the maximum priority of this thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getMaxPriority
     */
    public function getMaxPriority($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of this thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the parent of this thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getParent
     */
    public function getParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Interrupts all threads in this thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#interrupt
     */
    public function interrupt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread group is a daemon thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isDaemon
     */
    public function isDaemon($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread group has been destroyed.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isDestroyed
     */
    public function isDestroyed($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Prints information about this thread group to the standard output.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#list
     */
    public function list($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread group is either the thread group argument or one of its ancestor thread groups.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#parentOf
     */
    public function parentOf($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method is used solely in conjunction with       Thread.suspend and ThreadGroup.suspend,       both of which have been deprecated, as they are inherently       deadlock-prone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#resume
     */
    public function resume($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Changes the daemon status of this thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setDaemon
     */
    public function setDaemon($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the maximum priority of the group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setMaxPriority
     */
    public function setMaxPriority($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method is inherently unsafe.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#stop
     */
    public function stop($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method is inherently deadlock-prone.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#suspend
     */
    public function suspend($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of this Thread group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called by the Java Virtual Machine when a thread in this thread group stops because of an uncaught exception, and the thread does not have a specific Thread.UncaughtExceptionHandler installed.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#uncaughtException
     */
    public function uncaughtException($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
