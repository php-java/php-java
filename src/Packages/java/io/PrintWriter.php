<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\Writer;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\Appendable;

/**
 * The `PrintWriter` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\Writer
 */
class PrintWriter extends Writer /* implements Closeable, Appendable */
{
    /**
     * The underlying character-output stream of this PrintWriter.
     *
     * @var mixed $out
     */
    protected $out = null;


    /**
     * Appends the specified character to this writer.
     * Appends the specified character sequence to this writer.
     * Appends a subsequence of the specified character sequence to this writer.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#append
     */
    public function append($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Flushes the stream if it's not closed and checks its error state.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#checkError
     */
    public function checkError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Clears the error state of this stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#clearError
     */
    protected function clearError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes the stream and releases any system resources associated with it.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#close
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Flushes the stream.
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
     * Writes a formatted string to this writer using the specified format string and arguments.
     * Writes a formatted string to this writer using the specified format string and arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#format
     */
    public function format($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Prints a boolean value.
     * Prints a character.
     * Prints an array of characters.
     * Prints a double-precision floating-point number.
     * Prints a floating-point number.
     * Prints an integer.
     * Prints a long integer.
     * Prints an object.
     * Prints a string.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#print
     */
    public function print($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to write a formatted string to this writer using the specified format string and arguments.
     * A convenience method to write a formatted string to this writer using the specified format string and arguments.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#printf
     */
    public function printf($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Terminates the current line by writing the line separator string.
     * Prints a boolean value and then terminates the line.
     * Prints a character and then terminates the line.
     * Prints an array of characters and then terminates the line.
     * Prints a double-precision floating-point number and then terminates the line.
     * Prints a floating-point number and then terminates the line.
     * Prints an integer and then terminates the line.
     * Prints a long integer and then terminates the line.
     * Prints an Object and then terminates the line.
     * Prints a String and then terminates the line.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#println
     */
    public function println($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Indicates that an error has occurred.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setError
     */
    protected function setError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes an array of characters.
     * Writes A Portion of an array of characters.
     * Writes a single character.
     * Writes a string.
     * Writes a portion of a string.
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
