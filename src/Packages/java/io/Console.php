<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\io\Flushable;

/**
 * The `Console` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class Console extends Object_ // implements Flushable
{
    /**
     * Flushes the console and forces any buffered output to be written immediately .
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
     * Writes a formatted string to this console's output stream using the specified format string and arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#format
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function format($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to write a formatted string to this console's output stream using the specified format string and arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#printf
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function printf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves the unique Reader object associated with this console.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#reader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function reader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a single line of text from the console.
     * Provides a formatted prompt, then reads a single line of text from the console.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readLine
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function readLine($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a password or passphrase from the console with echoing disabled
     * Provides a formatted prompt, then reads a password or passphrase from the console with echoing disabled.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readPassword
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function readPassword($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves the unique PrintWriter object associated with this console.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writer
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writer($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
