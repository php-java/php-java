<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\FilterInputStream;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `BufferedInputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\InputStream
 * @parent \PHPJava\Packages\java\io\FilterInputStream
 */
class BufferedInputStream extends FilterInputStream /* implements Closeable, AutoCloseable */
{
    /**
     * The internal buffer array where the data is stored.
     *
     * @var mixed $buf
     */
    protected $buf = null;

    /**
     * The index one greater than the index of the last valid byte in the buffer.
     *
     * @var mixed $count
     */
    protected $count = null;

    /**
     * The maximum read ahead allowed after a call to the mark method before subsequent calls to the reset method fail.
     *
     * @var mixed $marklimit
     */
    protected $marklimit = null;

    /**
     * The value of the pos field at the time the last mark method was called.
     *
     * @var mixed $markpos
     */
    protected $markpos = null;

    /**
     * The current position in the buffer.
     *
     * @var mixed $pos
     */
    protected $pos = null;


    /**
     * Returns an estimate of the number of bytes that can be read (or skipped over) from this input stream without blocking by the next invocation of a method for this input stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#available
     */
    public function available($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes this input stream and releases any system resources associated with the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#close
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * See the general contract of the mark method of InputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#mark
     */
    public function mark($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this input stream supports the mark and reset methods.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#markSupported
     */
    public function markSupported($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * See the general contract of the read method of InputStream.
     * Reads bytes from this byte-input stream into the specified byte array, starting at the given offset.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#read
     */
    public function read($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * See the general contract of the reset method of InputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#reset
     */
    public function reset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * See the general contract of the skip method of InputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#skip
     */
    public function skip($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
