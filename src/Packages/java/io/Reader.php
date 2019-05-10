<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `Reader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Reader extends _Object // implements Closeable, AutoCloseable
{
    /**
     * The object used to synchronize operations on this stream.
     *
     * @var mixed $lock
     */
    protected $lock;

    /**
     * Closes the stream and releases any system resources associated with it.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#close
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Marks the present position in the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#mark
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function mark($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether this stream supports the mark() operation.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#markSupported
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function markSupported($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new Reader that reads no characters.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#nullReader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_nullReader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a single character.
     * Reads characters into an array.
     * Reads characters into a portion of an array.
     * Attempts to read characters into the specified character buffer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#read
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function read($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether this stream is ready to be read.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#ready
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ready($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Resets the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#reset
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function reset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Skips characters.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#skip
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function skip($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads all characters from this reader and writes the characters to the given writer in the order that they are read.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#transferTo
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function transferTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
