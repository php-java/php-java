<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang\ProcessBuilder;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

/**
 * The `Redirect` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class Redirect extends Object_
{
    /**
     * Indicates that subprocess output will be discarded.
     *
     * @var mixed $DISCARD
     */
    public static $DISCARD = null;

    /**
     * Indicates that subprocess I/O source or destination will be the same as those of the current process.
     *
     * @var mixed $INHERIT
     */
    public static $INHERIT = null;

    /**
     * Indicates that subprocess I/O will be connected to the current Java process over a pipe.
     *
     * @var mixed $PIPE
     */
    public static $PIPE = null;

    /**
     * Returns a redirect to append to the specified file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#appendTo
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_appendTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares the specified object with this Redirect for equality.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#equals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the File source or destination associated with this redirect, or null if there is no such file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#file
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function file($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a redirect to read from the specified file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#from
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_from($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a hash code value for this Redirect.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a redirect to write to the specified file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#to
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_to($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the type of this Redirect.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#type
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function type($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
