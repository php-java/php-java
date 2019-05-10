<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Flushable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `BufferedOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 * @parent \PHPJava\Packages\java\io\FilterOutputStream
 */
class BufferedOutputStream extends FilterOutputStream // implements Flushable, AutoCloseable
{
    /**
     * The internal buffer where data is stored.
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
     * Flushes this buffered output stream.
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
     * Writes len bytes from the specified byte array starting at offset off to this buffered output stream.
     * Writes the specified byte to this buffered output stream.
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
}
