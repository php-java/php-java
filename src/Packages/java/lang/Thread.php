<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\lang\Thread\UncaughtExceptionHandler;
// use PHPJava\Packages\java\util\Map;

/**
 * The `Thread` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Thread extends _Object // implements UncaughtExceptionHandler, Map
{
    /**
     * The maximum priority that a thread can have.
     *
     * @var mixed $MAX_PRIORITY
     */
    public static $MAX_PRIORITY = null;

    /**
     * The minimum priority that a thread can have.
     *
     * @var mixed $MIN_PRIORITY
     */
    public static $MIN_PRIORITY = null;

    /**
     * The default priority that is assigned to a thread.
     *
     * @var mixed $NORM_PRIORITY
     */
    public static $NORM_PRIORITY = null;

    /**
     * Returns an estimate of the number of active threads in the current thread's thread group and its subgroups.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#activeCount
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_activeCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the currently running thread has permission to modify this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#checkAccess
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkAccess($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated, for removal: This API element is subject to removal in a future version.The definition of this call depends on suspend(),             which is deprecated.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#countStackFrames
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function countStackFrames($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a reference to the currently executing thread object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#currentThread
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_currentThread($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Prints a stack trace of the current thread to the standard error stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#dumpStack
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_dumpStack($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Copies into the specified array every active thread in the current thread's thread group and its subgroups.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#enumerate
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_enumerate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a map of stack traces for all live threads.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAllStackTraces
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getAllStackTraces($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the context ClassLoader for this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getContextClassLoader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getContextClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the default handler invoked when a thread abruptly terminates due to an uncaught exception.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDefaultUncaughtExceptionHandler
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getDefaultUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the identifier of this Thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getId
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getId($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this thread's name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this thread's priority.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPriority
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPriority($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of stack trace elements representing the stack dump of this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getStackTrace
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getStackTrace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the state of this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getState
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getState($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the thread group to which this thread belongs.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getThreadGroup
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getThreadGroup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the handler invoked when this thread abruptly terminates due to an uncaught exception.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getUncaughtExceptionHandler
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if and only if the current thread holds the monitor lock on the specified object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#holdsLock
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_holdsLock($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Interrupts this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#interrupt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function interrupt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the current thread has been interrupted.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#interrupted
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_interrupted($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread is alive.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAlive
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isAlive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread is a daemon thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isDaemon
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isDaemon($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether this thread has been interrupted.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isInterrupted
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isInterrupted($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Waits for this thread to die.
     * Waits at most millis milliseconds for this thread to die.
     * Waits at most millis milliseconds plus nanos nanoseconds for this thread to die.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#join
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function join($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates that the caller is momentarily unable to progress, until the occurrence of one or more actions on the part of other activities.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#onSpinWait
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_onSpinWait($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method exists solely for use with suspend(),     which has been deprecated because it is deadlock-prone.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#resume
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function resume($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * If this thread was constructed using a separate Runnable run object, then that Runnable object's run method is called; otherwise, this method does nothing and returns.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#run
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function run($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the context ClassLoader for this Thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setContextClassLoader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setContextClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Marks this thread as either a daemon thread or a user thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setDaemon
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setDaemon($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the default handler invoked when a thread abruptly terminates due to an uncaught exception, and no other handler has been defined for that thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setDefaultUncaughtExceptionHandler
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setDefaultUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Changes the name of this thread to be equal to the argument name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Changes the priority of this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setPriority
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setPriority($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the handler invoked when this thread abruptly terminates due to an uncaught exception.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setUncaughtExceptionHandler
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes the currently executing thread to sleep (temporarily cease execution) for the specified number of milliseconds, subject to the precision and accuracy of system timers and schedulers.
     * Causes the currently executing thread to sleep (temporarily cease execution) for the specified number of milliseconds plus the specified number of nanoseconds, subject to the precision and accuracy of system timers and schedulers.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#sleep
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_sleep($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes this thread to begin execution; the Java Virtual Machine calls the run method of this thread.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#start
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function start($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method is inherently unsafe.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#stop
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function stop($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method has been deprecated, as it is   inherently deadlock-prone.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#suspend
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function suspend($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a string representation of this thread, including the thread's name, priority, and thread group.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A hint to the scheduler that the current thread is willing to yield its current use of a processor.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#yield
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_yield($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
