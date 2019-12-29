<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\Readable;
// use PHPJava\Packages\java\util\stream\Stream;

/**
 * The `BufferedReader` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\io\Reader
 */
class BufferedReader extends Reader // implements Closeable, Readable, Stream
{
    /**
     * Returns a Stream, the elements of which are lines read from this BufferedReader.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lines
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lines($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Marks the present position in the stream.
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
     * Tells whether this stream supports the mark() operation, which it does.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#markSupported
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function markSupported($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a single character.
     * Reads characters into a portion of an array.
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
     * Reads a line of text.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readLine
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function readLine($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether this stream is ready to be read.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#ready
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function ready($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Resets the stream to the most recent mark.
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
     * Skips characters.
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
