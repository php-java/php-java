<?php
namespace PHPJava\Packages\java\nio;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\nio\ByteBuffer;

// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `MappedByteBuffer` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\nio\Buffer
 * @parent \PHPJava\Packages\java\nio\ByteBuffer
 */
class MappedByteBuffer extends ByteBuffer /* implements Comparable */
{

    /**
     * Forces any changes made to this buffer's content to be written to the storage device containing the mapped file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#force
     */
    public function force($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether or not this buffer's content is resident in physical memory.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#isLoaded
     */
    public function isLoaded($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads this buffer's content into physical memory.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#load
     */
    public function load($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
