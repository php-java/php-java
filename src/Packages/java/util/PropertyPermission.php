<?php
namespace PHPJava\Packages\java\util;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\security\BasicPermission;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\security\Guard;

/**
 * The `PropertyPermission` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\security\Permission
 * @parent \PHPJava\Packages\java\security\BasicPermission
 */
class PropertyPermission extends BasicPermission /* implements Serializable, Guard */
{

    /**
     * Checks two PropertyPermission objects for equality.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#equals
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#getActions
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
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Checks if this PropertyPermission object "implies" the specified permission.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#implies
     */
    public function implies($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a new PermissionCollection object for storing PropertyPermission objects.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/util/package-summary.html#newPermissionCollection
     */
    public function newPermissionCollection($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
