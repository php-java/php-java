<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\lang\System\Logger;
// use PHPJava\Packages\java\util\Map;
// use PHPJava\Packages\java\nio\channels\Channel;

/**
 * The `System` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class System extends _Object /* implements Logger, Map, Channel */
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
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#arraycopy
     */
    public static function static_arraycopy($a = null, $b = null, $c = null, $d = null, $e = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Removes the system property indicated by the specified key.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#clearProperty
     */
    public static function static_clearProperty($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unique Console object associated with the current Java virtual machine, if any.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#console
     */
    public static function static_console($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current time in milliseconds.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#currentTimeMillis
     */
    public static function static_currentTimeMillis($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Terminates the currently running Java Virtual Machine.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#exit
     */
    public static function static_exit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Runs the garbage collector.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#gc
     */
    public static function static_gc($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an unmodifiable string map view of the current system environment.
     * Gets the value of the specified environment variable.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getenv
     */
    public static function static_getenv($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an instance of Logger for the caller's use.
     * Returns a localizable instance of Logger for the caller's use.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getLogger
     */
    public static function static_getLogger($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines the current system properties.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getProperties
     */
    public static function static_getProperties($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system property indicated by the specified key.
     * Gets the system property indicated by the specified key.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getProperty
     */
    public static function static_getProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system security interface.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getSecurityManager
     */
    public static function static_getSecurityManager($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the same hash code for the given object as would be returned by the default method hashCode(), whether or not the given object's class overrides hashCode().
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#identityHashCode
     */
    public static function static_identityHashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the channel inherited from the entity that created this Java virtual machine.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#inheritedChannel
     */
    public static function static_inheritedChannel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the system-dependent line separator string.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#lineSeparator
     */
    public static function static_lineSeparator($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads the native library specified by the filename argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#load
     */
    public static function static_load($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads the native library specified by the libname argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#loadLibrary
     */
    public static function static_loadLibrary($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Maps a library name into a platform-specific string representing a native library.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#mapLibraryName
     */
    public static function static_mapLibraryName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the current value of the running Java Virtual Machine's high-resolution time source, in nanoseconds.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#nanoTime
     */
    public static function static_nanoTime($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Runs the finalization methods of any objects pending finalization.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#runFinalization
     */
    public static function static_runFinalization($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reassigns the "standard" error output stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setErr
     */
    public static function static_setErr($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reassigns the "standard" input stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setIn
     */
    public static function static_setIn($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reassigns the "standard" output stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setOut
     */
    public static function static_setOut($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the system properties to the Properties argument.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setProperties
     */
    public static function static_setProperties($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the system property indicated by the specified key.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setProperty
     */
    public static function static_setProperty($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the System security.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#setSecurityManager
     */
    public static function static_setSecurityManager($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
