<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Packages\java\lang\NullPointerException;
use PHPJava\Utilities\PrintTool;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\Appendable;

/**
 * The `PrintStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 * @parent \PHPJava\Packages\java\io\FilterOutputStream
 */
class PrintStream extends FilterOutputStream // implements Closeable, Appendable
{
    private $sequence = '';

    /**
     * Appends the specified character to this output stream.
     * Appends the specified character sequence to this output stream.
     * Appends a subsequence of the specified character sequence to this output stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#append
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function append($a = null, $b = null, $c = null)
    {
        $string = $a;

        $this->sequence .= $string;
        return $this;
    }

    /**
     * Flushes the stream and checks its error state.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#checkError
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function checkError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Clears the internal error state of this stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#clearError
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function clearError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes the stream.
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
     * Writes a formatted string to this output stream using the specified format string and arguments.
     * Writes a formatted string to this output stream using the specified format string and arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#format
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
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
     * @depended-info signature
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#print
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function print($methodSignature, $a = null)
    {
        /**
         * TODO: Rewrite here.
         * This method is very weak.
         * We need to judge parameters type with methodSignature parameter.
         */
        // Did not pass a parameter.
        if (!isset($methodSignature['arguments'][0])) {
            return;
        }

        $arg = $a;

        if ($arg instanceof Utf8Info) {
            PrintTool::output($arg->getString());
            return;
        }
        if (is_scalar($arg) ||
            $arg instanceof Collection ||
            $arg instanceof PrimitiveValueInterface
        ) {
            if (((string) $arg) !== "\x00") {
                PrintTool::output($arg);
                return;
            }
        }

        if ($arg instanceof JavaClass) {
            PrintTool::output($arg);
            return;
        }

        [ $signatureType, $typeName ] = TypeResolver::getType($methodSignature['arguments'][0]);

        if ($typeName === \PHPJava\Packages\java\lang\String::class) {
            PrintTool::output('null');
        }

        throw new NullPointerException();
    }

    /**
     * A convenience method to write a formatted string to this output stream using the specified format string and arguments.
     * A convenience method to write a formatted string to this output stream using the specified format string and arguments.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#printf
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function printf($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Terminates the current line by writing the line separator string.
     * Prints a boolean and then terminate the line.
     * Prints a character and then terminate the line.
     * Prints an array of characters and then terminate the line.
     * Prints a double and then terminate the line.
     * Prints a float and then terminate the line.
     * Prints an integer and then terminate the line.
     * Prints a long and then terminate the line.
     * Prints an Object and then terminate the line.
     * Prints a String and then terminate the line.
     *
     * @depended-info signature
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#println
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function println($methodSignature, $a = null)
    {
        try {
            $this->print($methodSignature, $a);
            // output break line
            PrintTool::output("\n");
        } catch (\Exception $e) {
            PrintTool::output("\n");
            throw $e;
        }
    }

    /**
     * Sets the error state of the stream to true.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setError
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function setError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes len bytes from the specified byte array starting at offset off to this stream.
     * Writes the specified byte to this stream.
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
