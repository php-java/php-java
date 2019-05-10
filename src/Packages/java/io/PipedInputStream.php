<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `PipedInputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\InputStream
 */
class PipedInputStream extends InputStream // implements Closeable, AutoCloseable
{
    /**
     * The circular buffer into which incoming data is placed.
     *
     * @var mixed $buffer
     */
    protected $buffer;

    /**
     * The index of the position in the circular buffer at which the next byte of data will be stored when received from the connected piped output stream.
     *
     * @var mixed $in
     */
    protected $in;

    /**
     * The index of the position in the circular buffer at which the next byte of data will be read by this piped input stream.
     *
     * @var mixed $out
     */
    protected $out;

    /**
     * The default size of the pipe's circular input buffer.
     *
     * @var mixed $PIPE_SIZE
     */
    protected $PIPE_SIZE;

    /**
     * Returns the number of bytes that can be read from this input stream without blocking.
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
     * Closes this piped input stream and releases any system resources associated with the stream.
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
     * Causes this piped input stream to be connected to the piped  output stream src.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#connect
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function connect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads the next byte of data from this piped input stream.
     * Reads up to len bytes of data from this piped input stream into an array of bytes.
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
     * Receives a byte of data.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#receive
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function receive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
