<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `FileOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 */
class FileOutputStream extends OutputStream // implements Closeable, AutoCloseable
{
    /**
     * Closes this file output stream and releases any system resources associated with this stream.
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
     * Deprecated, for removal: This API element is subject to removal in a future version.The finalize method has been deprecated and will be removed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#finalize
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function finalize($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the unique FileChannel object associated with this file output stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getChannel
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getChannel($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the file descriptor associated with this stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getFD
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getFD($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes b.length bytes from the specified byte array to this file output stream.
     * Writes len bytes from the specified byte array starting at offset off to this file output stream.
     * Writes the specified byte to this file output stream.
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
