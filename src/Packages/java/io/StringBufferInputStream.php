<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `StringBufferInputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\InputStream
 */
class StringBufferInputStream extends InputStream // implements Closeable, AutoCloseable
{
    /**
     * Deprecated.The string from which bytes are read.
     *
     * @var mixed $buffer
     */
    protected $buffer;

    /**
     * Deprecated.The number of valid characters in the input stream buffer.
     *
     * @var mixed $count
     */
    protected $count;

    /**
     * Deprecated.The index of the next character to read from the input stream buffer.
     *
     * @var mixed $pos
     */
    protected $pos;

    /**
     * Deprecated.Returns the number of bytes that can be read from the input stream without blocking.
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
     * Deprecated.Resets the input stream to begin reading from the first character of this input stream's underlying buffer.
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
     * Deprecated.Skips n bytes of input from this input stream.
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
