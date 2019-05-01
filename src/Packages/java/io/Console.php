<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\Flushable;

/**
 * The `Console` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Console extends _Object /* implements Flushable */
{

    /**
     * Flushes the console and forces any buffered output to be written immediately .
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
     * Writes a formatted string to this console's output stream using the specified format string and arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#format
     */
    public function format($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to write a formatted string to this console's output stream using the specified format string and arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#printf
     */
    public function printf($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves the unique Reader object associated with this console.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#reader
     */
    public function reader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a single line of text from the console.
     * Provides a formatted prompt, then reads a single line of text from the console.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readLine
     */
    public function readLine($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a password or passphrase from the console with echoing disabled
     * Provides a formatted prompt, then reads a password or passphrase from the console with echoing disabled.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readPassword
     */
    public function readPassword($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieves the unique PrintWriter object associated with this console.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writer
     */
    public function writer($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
