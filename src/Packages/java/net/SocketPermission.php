<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\security\Permission;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\security\Guard;

/**
 * The `SocketPermission` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\security\Permission
 */
class SocketPermission extends Permission /* implements Serializable, Guard */
{

    /**
     * Checks two SocketPermission objects for equality.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the canonical string representation of the actions.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getActions
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks if this socket permission object "implies" the specified permission.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#implies
     */
    public function implies($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new PermissionCollection object for storing SocketPermission objects.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#newPermissionCollection
     */
    public function newPermissionCollection($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
