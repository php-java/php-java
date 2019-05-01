<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\OutputStream;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `ByteArrayOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 */
class ByteArrayOutputStream extends OutputStream /* implements Closeable, AutoCloseable */
{
    /**
     * The buffer where data is stored.
     *
     * @var mixed $buf
     */
    protected $buf = null;

    /**
     * The number of valid bytes in the buffer.
     *
     * @var mixed $count
     */
    protected $count = null;


    /**
     * Closing a ByteArrayOutputStream has no effect.
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
     * Resets the count field of this ByteArrayOutputStream to zero, so that all currently accumulated output in the output stream is discarded.
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
     * Returns the current size of the buffer.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#size
     */
    public function size($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a newly allocated byte array.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toByteArray
     */
    public function toByteArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the buffer's contents into a string decoding bytes using the platform's default character set.
     * Deprecated.This method does not properly convert bytes into characters.
     * Converts the buffer's contents into a string by decoding the bytes using the named charset.
     * Converts the buffer's contents into a string by decoding the bytes using the specified charset.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes len bytes from the specified byte array starting at offset off to this ByteArrayOutputStream.
     * Writes the specified byte to this ByteArrayOutputStream.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#write
     */
    public function write($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes the complete contents of the specified byte array to this ByteArrayOutputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeBytes
     */
    public function writeBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes the complete contents of this ByteArrayOutputStream to the specified output stream argument, as if by calling the output stream's write method using out.write(buf, 0, count).
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeTo
     */
    public function writeTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
