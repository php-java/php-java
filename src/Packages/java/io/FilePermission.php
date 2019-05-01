<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\security\Permission;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\security\Guard;

/**
 * The `FilePermission` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\security\Permission
 */
class FilePermission extends Permission /* implements Serializable, Guard */
{

    /**
     * Checks two FilePermission objects for equality.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the "canonical string representation" of the actions.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getActions
     */
    public function getActions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code value for this object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks if this FilePermission object "implies" the specified permission.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#implies
     */
    public function implies($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new PermissionCollection object for storing FilePermission objects.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#newPermissionCollection
     */
    public function newPermissionCollection($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
