<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `ByteArrayOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\io\OutputStream
 */
class ByteArrayOutputStream extends OutputStream // implements Closeable, AutoCloseable
{
    /**
     * The buffer where data is stored.
     *
     * @var mixed $buf
     */
    protected $buf;

    /**
     * The number of valid bytes in the buffer.
     *
     * @var mixed $count
     */
    protected $count;

    /**
     * Closing a ByteArrayOutputStream has no effect.
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
     * Resets the count field of this ByteArrayOutputStream to zero, so that all currently accumulated output in the output stream is discarded.
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
     * Returns the current size of the buffer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#size
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function size($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a newly allocated byte array.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toByteArray
     * @param null|mixed $a
     * @throws NotImplementedException
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes len bytes from the specified byte array starting at offset off to this ByteArrayOutputStream.
     * Writes the specified byte to this ByteArrayOutputStream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#write
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function write($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes the complete contents of the specified byte array to this ByteArrayOutputStream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeBytes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes the complete contents of this ByteArrayOutputStream to the specified output stream argument, as if by calling the output stream's write method using out.write(buf, 0, count).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeTo
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
