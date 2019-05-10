<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Flushable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `BufferedWriter` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\Writer
 */
class BufferedWriter extends Writer // implements Flushable, AutoCloseable
{
    /**
     * Flushes the stream.
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
     * Writes a line separator.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#newLine
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function newLine($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a portion of an array of characters.
     * Writes a single character.
     * Writes a portion of a String.
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
