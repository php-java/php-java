<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `PipedReader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\Reader
 */
class PipedReader extends Reader // implements Closeable, AutoCloseable
{
    /**
     * Closes this piped stream and releases any system resources associated with the stream.
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
     * Causes this piped reader to be connected to the piped  writer src.
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
     * Reads the next character of data from this piped stream.
     * Reads up to len characters of data from this piped stream into an array of characters.
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
     * Tell whether this stream is ready to be read.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#ready
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ready($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
