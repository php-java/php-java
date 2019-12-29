<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\security\Permission;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\security\Guard;

/**
 * The `SocketPermission` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 * @parent \PHPJava\Packages\java\security\Permission
 */
class SocketPermission extends Permission // implements Serializable, Guard
{
    /**
     * Checks two SocketPermission objects for equality.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#equals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the canonical string representation of the actions.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getActions
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getActions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the hash code value for this object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks if this socket permission object "implies" the specified permission.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#implies
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function implies($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new PermissionCollection object for storing SocketPermission objects.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#newPermissionCollection
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function newPermissionCollection($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
