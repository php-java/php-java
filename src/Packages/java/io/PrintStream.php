<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Packages\java\lang\NullPointerException;

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
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#append
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
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#checkError
     */
    public function checkError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Clears the internal error state of this stream.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#clearError
     */
    protected function clearError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes the stream.
     *
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
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#flush
     */
    public function flush($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a formatted string to this output stream using the specified format string and arguments.
     * Writes a formatted string to this output stream using the specified format string and arguments.
     *
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
     * @depended-info signature
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#print
     */
    public function print($methodSignature, $a = null)
    {
        $arg = $a;

        if ($arg instanceof Utf8Info) {
            echo $arg->getString();
            return;
        }
        if (is_scalar($arg) ||
            $arg instanceof Collection ||
            $arg instanceof PrimitiveValueInterface
        ) {
            echo $arg;
            return;
        }

        if ($arg instanceof JavaClass) {
            echo $arg;
            return;
        }

        [ $signatureType, $typeName ] = TypeResolver::getType($methodSignature['arguments'][0]);

        if ($typeName === \PHPJava\Packages\java\lang\String::class) {
            echo 'null';
        }

        throw new NullPointerException();
    }

    /**
     * A convenience method to write a formatted string to this output stream using the specified format string and arguments.
     * A convenience method to write a formatted string to this output stream using the specified format string and arguments.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#printf
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
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#println
     */
    public function println($methodSignature, $a = null)
    {
        try {
            $this->print($methodSignature, $a);
            // output break line
            echo "\n";
        } catch (\Exception $e) {
            echo "\n";
            throw $e;
        }
    }

    /**
     * Sets the error state of the stream to true.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setError
     */
    protected function setError($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes len bytes from the specified byte array starting at offset off to this stream.
     * Writes the specified byte to this stream.
     *
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#write
     */
    public function write($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
