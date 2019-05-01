<?php
namespace PHPJava\Packages\java\util\Base64;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `Encoder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Encoder extends _Object
{

    /**
     * Encodes all bytes from the specified byte array into a newly-allocated byte array using the Base64 encoding scheme.
     * Encodes all bytes from the specified byte array using the Base64 encoding scheme, writing the resulting bytes to the given output byte array, starting at offset 0.
     * Encodes all remaining bytes from the specified byte buffer into a newly-allocated ByteBuffer using the Base64 encoding scheme.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#encode
     */
    public function encode($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Encodes the specified byte array into a String using the Base64 encoding scheme.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#encodeToString
     */
    public function encodeToString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an encoder instance that encodes equivalently to this one, but without adding any padding character at the end of the encoded byte data.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#withoutPadding
     */
    public function withoutPadding($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Wraps an output stream for encoding byte data using the Base64 encoding scheme.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#wrap
     */
    public function wrap($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
