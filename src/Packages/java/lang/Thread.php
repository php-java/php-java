<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\CloneNotSupportedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\Thread\UncaughtExceptionHandler;
// use PHPJava\Packages\java\util\Map;

/**
 * The `Thread` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Thread extends _Object /* implements UncaughtExceptionHandler, Map */
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
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#activeCount
     */
    public static function static_activeCount($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines if the currently running thread has permission to modify this thread.
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
     * Deprecated, for removal: This API element is subject to removal in a future version.The definition of this call depends on suspend(),             which is deprecated.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#countStackFrames
     */
    public function countStackFrames($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a reference to the currently executing thread object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#currentThread
     */
    public static function static_currentThread($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Prints a stack trace of the current thread to the standard error stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#dumpStack
     */
    public static function static_dumpStack($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Copies into the specified array every active thread in the current thread's thread group and its subgroups.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#enumerate
     */
    public static function static_enumerate($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a map of stack traces for all live threads.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getAllStackTraces
     */
    public static function static_getAllStackTraces($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the context ClassLoader for this thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getContextClassLoader
     */
    public function getContextClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the default handler invoked when a thread abruptly terminates due to an uncaught exception.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getDefaultUncaughtExceptionHandler
     */
    public static function static_getDefaultUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the identifier of this Thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getId
     */
    public function getId($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns this thread's name.
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
     * Returns this thread's priority.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getPriority
     */
    public function getPriority($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of stack trace elements representing the stack dump of this thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getStackTrace
     */
    public function getStackTrace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the state of this thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getState
     */
    public function getState($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the thread group to which this thread belongs.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getThreadGroup
     */
    public function getThreadGroup($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the handler invoked when this thread abruptly terminates due to an uncaught exception.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getUncaughtExceptionHandler
     */
    public function getUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if and only if the current thread holds the monitor lock on the specified object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#holdsLock
     */
    public static function static_holdsLock($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Interrupts this thread.
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
     * Tests whether the current thread has been interrupted.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#interrupted
     */
    public static function static_interrupted($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread is alive.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAlive
     */
    public function isAlive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this thread is a daemon thread.
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
     * Tests whether this thread has been interrupted.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isInterrupted
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
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#join
     */
    public function join($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates that the caller is momentarily unable to progress, until the occurrence of one or more actions on the part of other activities.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#onSpinWait
     */
    public static function static_onSpinWait($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method exists solely for use with suspend(),     which has been deprecated because it is deadlock-prone.
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
     * If this thread was constructed using a separate Runnable run object, then that Runnable object's run method is called; otherwise, this method does nothing and returns.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#run
     */
    public function run($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the context ClassLoader for this Thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setContextClassLoader
     */
    public function setContextClassLoader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Marks this thread as either a daemon thread or a user thread.
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
     * Set the default handler invoked when a thread abruptly terminates due to an uncaught exception, and no other handler has been defined for that thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setDefaultUncaughtExceptionHandler
     */
    public static function static_setDefaultUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Changes the name of this thread to be equal to the argument name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setName
     */
    public function setName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Changes the priority of this thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setPriority
     */
    public function setPriority($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the handler invoked when this thread abruptly terminates due to an uncaught exception.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setUncaughtExceptionHandler
     */
    public function setUncaughtExceptionHandler($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes the currently executing thread to sleep (temporarily cease execution) for the specified number of milliseconds, subject to the precision and accuracy of system timers and schedulers.
     * Causes the currently executing thread to sleep (temporarily cease execution) for the specified number of milliseconds plus the specified number of nanoseconds, subject to the precision and accuracy of system timers and schedulers.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#sleep
     */
    public static function static_sleep($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes this thread to begin execution; the Java Virtual Machine calls the run method of this thread.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#start
     */
    public function start($a = null)
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
     * Deprecated.This method has been deprecated, as it is   inherently deadlock-prone.
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
     * Returns a string representation of this thread, including the thread's name, priority, and thread group.
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
     * A hint to the scheduler that the current thread is willing to yield its current use of a processor.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#yield
     */
    public static function static_yield($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
