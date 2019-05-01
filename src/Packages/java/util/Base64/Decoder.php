<?php
namespace PHPJava\Packages\java\util\Base64;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `Decoder` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Decoder extends _Object
{

    /**
     * Decodes all bytes from the input byte array using the Base64 encoding scheme, writing the results into a newly-allocated output byte array.
     * Decodes all bytes from the input byte array using the Base64 encoding scheme, writing the results into the given output byte array, starting at offset 0.
     * Decodes a Base64 encoded String into a newly-allocated byte array using the Base64 encoding scheme.
     * Decodes all bytes from the input byte buffer using the Base64 encoding scheme, writing the results into a newly-allocated ByteBuffer.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#decode
     */
    public function decode($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an input stream for decoding Base64 encoded byte stream.
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
