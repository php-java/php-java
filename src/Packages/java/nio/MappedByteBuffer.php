<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\nio;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\lang\Comparable;

/**
 * The `MappedByteBuffer` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\nio\Buffer
 * @parent \PHPJava\Packages\java\nio\ByteBuffer
 */
class MappedByteBuffer extends ByteBuffer // implements Comparable
{
    /**
     * Forces any changes made to this buffer's content to be written to the storage device containing the mapped file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#force
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function force($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tells whether or not this buffer's content is resident in physical memory.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#isLoaded
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isLoaded($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Loads this buffer's content into physical memory.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/nio/package-summary.html#load
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function load($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
