<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\io\InputStream;

// use PHPJava\Packages\java\io\ObjectInputFilter;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `ObjectInputStream` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\io\InputStream
 */
class ObjectInputStream extends InputStream /* implements ObjectInputFilter, AutoCloseable */
{

    /**
     * Returns the number of bytes that can be read without blocking.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#available
     */
    public function available($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Closes the input stream.
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
     * Read the non-static and non-transient fields of the current class from this stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#defaultReadObject
     */
    public function defaultReadObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Enables the stream to do replacement of objects read from the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#enableResolveObject
     */
    protected function enableResolveObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the serialization filter for this stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getObjectInputFilter
     */
    public function getObjectInputFilter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a byte of data.
     * Reads into an array of bytes.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#read
     */
    public function read($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads in a boolean.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readBoolean
     */
    public function readBoolean($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads an 8 bit byte.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readByte
     */
    public function readByte($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a 16 bit char.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readChar
     */
    public function readChar($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Read a class descriptor from the serialization stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readClassDescriptor
     */
    protected function readClassDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a 64 bit double.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readDouble
     */
    public function readDouble($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads the persistent fields from the stream and makes them available by name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readFields
     */
    public function readFields($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a 32 bit float.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readFloat
     */
    public function readFloat($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads bytes, blocking until all bytes are read.
     * Reads bytes, blocking until all bytes are read.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readFully
     */
    public function readFully($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a 32 bit int.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readInt
     */
    public function readInt($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method does not properly convert bytes to characters.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readLine
     */
    public function readLine($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a 64 bit long.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readLong
     */
    public function readLong($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Read an object from the ObjectInputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readObject
     */
    public function readObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * This method is called by trusted subclasses of ObjectOutputStream that constructed ObjectOutputStream using the protected no-arg constructor.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readObjectOverride
     */
    protected function readObjectOverride($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a 16 bit short.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readShort
     */
    public function readShort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The readStreamHeader method is provided to allow subclasses to read and verify their own stream headers.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readStreamHeader
     */
    protected function readStreamHeader($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads an "unshared" object from the ObjectInputStream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readUnshared
     */
    public function readUnshared($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads an unsigned 8 bit byte.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readUnsignedByte
     */
    public function readUnsignedByte($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads an unsigned 16 bit short.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readUnsignedShort
     */
    public function readUnsignedShort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Reads a String in modified UTF-8 format.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readUTF
     */
    public function readUTF($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Register an object to be validated before the graph is returned.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#registerValidation
     */
    public function registerValidation($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Load the local class equivalent of the specified stream class description.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#resolveClass
     */
    protected function resolveClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * This method will allow trusted subclasses of ObjectInputStream to substitute one object for another during deserialization.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#resolveObject
     */
    protected function resolveObject($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a proxy class that implements the interfaces named in a proxy class descriptor; subclasses may implement this method to read custom data from the stream along with the descriptors for dynamic proxy classes, allowing them to use an alternate loading mechanism for the interfaces and the proxy class.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#resolveProxyClass
     */
    protected function resolveProxyClass($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the serialization filter for the stream.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setObjectInputFilter
     */
    public function setObjectInputFilter($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Skips bytes.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#skipBytes
     */
    public function skipBytes($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
