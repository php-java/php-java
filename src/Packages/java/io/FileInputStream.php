<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `FileInputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\InputStream
 */
class FileInputStream extends InputStream // implements Closeable, AutoCloseable
{
    /**
     * Returns an estimate of the number of remaining bytes that can be read (or skipped over) from this input stream without blocking by the next invocation of a method for this input stream.
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
     * Closes this file input stream and releases any system resources associated with the stream.
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
     * Returns the unique FileChannel object associated with this file input stream.
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
     * Returns the FileDescriptor object  that represents the connection to the actual file in the file system being used by this FileInputStream.
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
     * Reads a byte of data from this input stream.
     * Reads up to b.length bytes of data from this input stream into an array of bytes.
     * Reads up to len bytes of data from this input stream into an array of bytes.
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
     * Skips over and discards n bytes of data from the input stream.
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
