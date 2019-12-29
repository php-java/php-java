<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\DataOutput;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `ObjectOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\io\OutputStream
 */
class ObjectOutputStream extends OutputStream // implements DataOutput, AutoCloseable
{
    /**
     * Subclasses may implement this method to allow class data to be stored in the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#annotateClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function annotateClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Subclasses may implement this method to store custom data in the stream along with descriptors for dynamic proxy classes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#annotateProxyClass
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function annotateProxyClass($a = null)
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
     * Write the non-static and non-transient fields of the current class to this stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#defaultWriteObject
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function defaultWriteObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Drain any buffered data in ObjectOutputStream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#drain
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function drain($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enables the stream to do replacement of objects written to the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#enableReplaceObject
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function enableReplaceObject($a = null)
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
     * Retrieve the object used to buffer persistent fields to be written to the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#putFields
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function putFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * This method will allow trusted subclasses of ObjectOutputStream to substitute one object for another during serialization.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#replaceObject
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function replaceObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reset will disregard the state of any objects already written to the stream.
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
     * Specify stream protocol version to use when writing the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#useProtocolVersion
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function useProtocolVersion($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes an array of bytes.
     * Writes a sub array of bytes.
     * Writes a byte.
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

    /**
     * Writes a boolean.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeBoolean
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeBoolean($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes an 8 bit byte.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeByte
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeByte($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a String as a sequence of bytes.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeBytes
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 16 bit char.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeChar
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a String as a sequence of chars.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeChars
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeChars($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Write the specified class descriptor to the ObjectOutputStream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeClassDescriptor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function writeClassDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 64 bit double.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeDouble
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeDouble($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Write the buffered fields to the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeFields
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 32 bit float.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeFloat
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeFloat($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 32 bit int.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeInt
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeInt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 64 bit long.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeLong
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Write the specified object to the ObjectOutputStream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeObject
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Method used by subclasses to override the default writeObject method.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeObjectOverride
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function writeObjectOverride($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 16 bit short.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeShort
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeShort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The writeStreamHeader method is provided so subclasses can append or prepend their own header to the stream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeStreamHeader
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    protected function writeStreamHeader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes an "unshared" object to the ObjectOutputStream.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeUnshared
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeUnshared($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Primitive data write of this String in modified UTF-8 format.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeUTF
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function writeUTF($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
