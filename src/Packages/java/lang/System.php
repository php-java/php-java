<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\PHPJava\Kernel\Behavior\System as SystemBehavior;

// use PHPJava\Packages\java\lang\System\Logger;
// use PHPJava\Packages\java\util\Map;
// use PHPJava\Packages\java\nio\channels\Channel;

/**
 * The `System` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class System extends _Object // implements Logger, Map, Channel
{
    /**
     * The "standard" error output stream.
     *
     * @var mixed $err
     */
    public static $err = null;

    /**
     * The "standard" input stream.
     *
     * @var mixed $in
     */
    public static $in = null;

    /**
     * The "standard" output stream.
     *
     * @var mixed $out
     */
    public static $out = null;

    /**
     * Copies an array from the specified source array, beginning at the specified position, to the specified position of the destination array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#arraycopy
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @param null|mixed $e
     * @throws NotImplementedException
     */
    public static function static_arraycopy($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the system property indicated by the specified key.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#clearProperty
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_clearProperty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unique Console object associated with the current Java virtual machine, if any.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#console
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_console($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current time in milliseconds.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#currentTimeMillis
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_currentTimeMillis($a = null)
    {
        return time() * 1000;
    }

    /**
     * Terminates the currently running Java Virtual Machine.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#exit
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_exit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Runs the garbage collector.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#gc
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_gc($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable string map view of the current system environment.
     * Gets the value of the specified environment variable.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getenv
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getenv($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an instance of Logger for the caller's use.
     * Returns a localizable instance of Logger for the caller's use.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getLogger
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_getLogger($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines the current system properties.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getProperties
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getProperties($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system property indicated by the specified key.
     * Gets the system property indicated by the specified key.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_getProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system security interface.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSecurityManager
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getSecurityManager($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the same hash code for the given object as would be returned by the default method hashCode(), whether or not the given object's class overrides hashCode().
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/System.html#identityHashCode(java.lang.Object)
     * @param null|mixed $a
     */
    public static function static_identityHashCode($a = null)
    {
        return SystemBehavior::identityHashCode($a);
    }

    /**
     * Returns the channel inherited from the entity that created this Java virtual machine.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#inheritedChannel
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_inheritedChannel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the system-dependent line separator string.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lineSeparator
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_lineSeparator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads the native library specified by the filename argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#load
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_load($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads the native library specified by the libname argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#loadLibrary
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_loadLibrary($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Maps a library name into a platform-specific string representing a native library.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#mapLibraryName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_mapLibraryName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current value of the running Java Virtual Machine's high-resolution time source, in nanoseconds.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nanoTime
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_nanoTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Runs the finalization methods of any objects pending finalization.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#runFinalization
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_runFinalization($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reassigns the "standard" error output stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setErr
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setErr($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reassigns the "standard" input stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setIn
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setIn($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reassigns the "standard" output stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setOut
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setOut($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the system properties to the Properties argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setProperties
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setProperties($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the system property indicated by the specified key.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setProperty
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_setProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the System security.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setSecurityManager
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setSecurityManager($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
