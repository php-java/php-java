<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\FilterOutputStream;

// use PHPJava\Packages\java\io\DataOutput;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `DataOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 * @parent \PHPJava\Packages\java\io\FilterOutputStream
 */
class DataOutputStream extends FilterOutputStream /* implements DataOutput, AutoCloseable */
{
    /**
     * The number of bytes written to the data output stream so far.
     *
     * @var mixed $written
     */
    protected $written = null;


    /**
     * Flushes this data output stream.
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
     * Returns the current value of the counter written, the number of bytes written to this data output stream so far.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#size
     */
    public function size($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes len bytes from the specified byte array starting at offset off to the underlying output stream.
     * Writes the specified byte (the low eight bits of the argument b) to the underlying output stream.
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

    /**
     * Writes a boolean to the underlying output stream as a 1-byte value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeBoolean
     */
    public function writeBoolean($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes out a byte to the underlying output stream as a 1-byte value.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeByte
     */
    public function writeByte($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes out the string to the underlying output stream as a sequence of bytes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeBytes
     */
    public function writeBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a char to the underlying output stream as a 2-byte value, high byte first.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeChar
     */
    public function writeChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a string to the underlying output stream as a sequence of characters.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeChars
     */
    public function writeChars($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the double argument to a long using the doubleToLongBits method in class Double, and then writes that long value to the underlying output stream as an 8-byte quantity, high byte first.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeDouble
     */
    public function writeDouble($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts the float argument to an int using the floatToIntBits method in class Float, and then writes that int value to the underlying output stream as a 4-byte quantity, high byte first.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeFloat
     */
    public function writeFloat($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes an int to the underlying output stream as four bytes, high byte first.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeInt
     */
    public function writeInt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a long to the underlying output stream as eight bytes, high byte first.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeLong
     */
    public function writeLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a short to the underlying output stream as two bytes, high byte first.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeShort
     */
    public function writeShort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a string to the underlying output stream using modified UTF-8 encoding in a machine-independent manner.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeUTF
     */
    public function writeUTF($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
