<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;

/**
 * The `Externalizable` interface was auto generated.
 */
interface Externalizable
{
    /**
     * The object implements the readExternal method to restore its contents by calling the methods of DataInput for primitive types and readObject for objects, strings and arrays.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#readExternal
     * @NotImplemented
     */
    // public function readExternal($a = null)

    /**
     * The object implements the writeExternal method to save its contents by calling the methods of DataOutput for its primitive values or calling the writeObject method of ObjectOutput for objects, strings, and arrays.
     *
     * @param mixed $a
     * @throws NotImplementedException
     * @return mixed
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#writeExternal
     * @NotImplemented
     */
    // public function writeExternal($a = null)
}
