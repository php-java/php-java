<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\FilterOutputStream;

// use PHPJava\Packages\java\io\Flushable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `BufferedOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 * @parent \PHPJava\Packages\java\io\FilterOutputStream
 */
class BufferedOutputStream extends FilterOutputStream /* implements Flushable, AutoCloseable */
{
    /**
     * The internal buffer where data is stored.
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
     * Flushes this buffered output stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#flush
     */
    public function flush($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes len bytes from the specified byte array starting at offset off to this buffered output stream.
     * Writes the specified byte to this buffered output stream.
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
}
