<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `PipedWriter` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\io\Writer
 */
class PipedWriter extends Writer // implements Closeable, AutoCloseable
{
    /**
     * Closes this piped output stream and releases any system resources associated with this stream.
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
     * Connects this piped writer to a receiver.
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
     * Flushes this output stream and forces any buffered output characters to be written out.
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
     * Writes len characters from the specified character array starting at offset off to this piped output stream.
     * Writes the specified char to the piped output stream.
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
