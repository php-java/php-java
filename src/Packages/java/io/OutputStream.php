<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `OutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class OutputStream extends _Object // implements Closeable, AutoCloseable
{
    /**
     * Closes this output stream and releases any system resources associated with this stream.
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
     * Flushes this output stream and forces any buffered output bytes to be written out.
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
     * Returns a new OutputStream which discards all bytes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#nullOutputStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_nullOutputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes b.length bytes from the specified byte array to this output stream.
     * Writes len bytes from the specified byte array starting at offset off to this output stream.
     * Writes the specified byte to this output stream.
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
