<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `LineNumberInputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\io\InputStream
 * @parent \PHPJava\Packages\java\io\FilterInputStream
 */
class LineNumberInputStream extends FilterInputStream // implements Closeable, AutoCloseable
{
    /**
     * Deprecated.Returns the number of bytes that can be read from this input stream without blocking.
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
     * Deprecated.Returns the current line number.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getLineNumber
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLineNumber($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Marks the current position in this input stream.
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
     * Deprecated.Reads the next byte of data from this input stream.
     * Deprecated.Reads up to len bytes of data from this input stream into an array of bytes.
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
     * Deprecated.Repositions this stream to the position at the time the mark method was last called on this input stream.
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
     * Deprecated.Sets the line number to the specified argument.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setLineNumber
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setLineNumber($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Skips over and discards n bytes of data from this input stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#skip
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function skip($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
