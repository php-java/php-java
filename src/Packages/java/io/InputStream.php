<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `InputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class InputStream extends _Object // implements Closeable, AutoCloseable
{
    /**
     * Returns an estimate of the number of bytes that can be read (or skipped over) from this input stream without blocking, which may be 0, or 0 when end of stream is detected.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#available
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function available($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this input stream and releases any system resources associated with the stream.
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
     * Marks the current position in this input stream.
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
     * Tests if this input stream supports the mark and reset methods.
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
     * Returns a new InputStream that reads no bytes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#nullInputStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_nullInputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads the next byte of data from the input stream.
     * Reads some number of bytes from the input stream and stores them into the buffer array b.
     * Reads up to len bytes of data from the input stream into an array of bytes.
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
     * Reads all remaining bytes from the input stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readAllBytes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function readAllBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads the requested number of bytes from the input stream into the given byte array.
     * Reads up to a specified number of bytes from the input stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readNBytes
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function readNBytes($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Repositions this stream to the position at the time the mark method was last called on this input stream.
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
     * Skips over and discards n bytes of data from this input stream.
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
     * Reads all bytes from this input stream and writes the bytes to the given output stream in the order that they are read.
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
