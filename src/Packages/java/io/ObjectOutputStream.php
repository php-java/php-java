<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\OutputStream;

// use PHPJava\Packages\java\io\DataOutput;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `ObjectOutputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\OutputStream
 */
class ObjectOutputStream extends OutputStream /* implements DataOutput, AutoCloseable */
{

    /**
     * Subclasses may implement this method to allow class data to be stored in the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#annotateClass
     */
    protected function annotateClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Subclasses may implement this method to store custom data in the stream along with descriptors for dynamic proxy classes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#annotateProxyClass
     */
    protected function annotateProxyClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes the stream.
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
     * Write the non-static and non-transient fields of the current class to this stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#defaultWriteObject
     */
    public function defaultWriteObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Drain any buffered data in ObjectOutputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#drain
     */
    protected function drain($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enables the stream to do replacement of objects written to the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#enableReplaceObject
     */
    protected function enableReplaceObject($a = null)
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
     * Retrieve the object used to buffer persistent fields to be written to the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#putFields
     */
    public function putFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * This method will allow trusted subclasses of ObjectOutputStream to substitute one object for another during serialization.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#replaceObject
     */
    protected function replaceObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reset will disregard the state of any objects already written to the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#reset
     */
    public function reset($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specify stream protocol version to use when writing the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#useProtocolVersion
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
     * Writes a boolean.
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
     * Writes an 8 bit byte.
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
     * Writes a String as a sequence of bytes.
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
     * Writes a 16 bit char.
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
     * Writes a String as a sequence of chars.
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
     * Write the specified class descriptor to the ObjectOutputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeClassDescriptor
     */
    protected function writeClassDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 64 bit double.
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
     * Write the buffered fields to the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeFields
     */
    public function writeFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 32 bit float.
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
     * Writes a 32 bit int.
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
     * Writes a 64 bit long.
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
     * Write the specified object to the ObjectOutputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeObject
     */
    public function writeObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Method used by subclasses to override the default writeObject method.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeObjectOverride
     */
    protected function writeObjectOverride($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes a 16 bit short.
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
     * The writeStreamHeader method is provided so subclasses can append or prepend their own header to the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeStreamHeader
     */
    protected function writeStreamHeader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Writes an "unshared" object to the ObjectOutputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeUnshared
     */
    public function writeUnshared($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Primitive data write of this String in modified UTF-8 format.
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
