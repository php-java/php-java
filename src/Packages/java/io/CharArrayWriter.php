<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `CharArrayWriter` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\Writer
 */
class CharArrayWriter extends Writer // implements Closeable, AutoCloseable
{
    /**
     * The buffer where data is stored.
     *
     * @var mixed $buf
     */
    protected $buf;

    /**
     * The number of chars in the buffer.
     *
     * @var mixed $count
     */
    protected $count;

    /**
     * Appends the specified character to this writer.
     * Appends the specified character sequence to this writer.
     * Appends a subsequence of the specified character sequence to this writer.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#append
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function append($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Close the stream.
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
     * Flush the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#flush
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function flush($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Resets the buffer so that you can use it again without throwing away the already allocated buffer.
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
     * Returns a copy of the input data.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toCharArray
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toCharArray($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts input data to a string.
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
     * Writes characters to the buffer.
     * Writes a character to the buffer.
     * Write a portion of a string to the buffer.
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
     * Writes the contents of the buffer to another character stream.
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
