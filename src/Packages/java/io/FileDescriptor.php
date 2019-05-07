<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

/**
 * The `FileDescriptor` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class FileDescriptor extends _Object
{
    /**
     * A handle to the standard error stream.
     *
     * @var mixed $err
     */
    public static $err = null;

    /**
     * A handle to the standard input stream.
     *
     * @var mixed $in
     */
    public static $in = null;

    /**
     * A handle to the standard output stream.
     *
     * @var mixed $out
     */
    public static $out = null;


    /**
     * Force all system buffers to synchronize with the underlying device.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#sync
     */
    public function sync($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests if this file descriptor object is valid.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#valid
     */
    public function valid($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
