<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `PushbackReader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\Reader
 * @parent \PHPJava\Packages\java\io\FilterReader
 */
class PushbackReader extends FilterReader // implements Closeable, AutoCloseable
{
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
     * Tells whether this stream supports the mark() operation, which it does not.
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
     * Reads a single character.
     * Reads characters into a portion of an array.
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
     * Pushes back an array of characters by copying it to the front of the pushback buffer.
     * Pushes back a portion of an array of characters by copying it to the front of the pushback buffer.
     * Pushes back a single character by copying it to the front of the pushback buffer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#unread
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function unread($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
