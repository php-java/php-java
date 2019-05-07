<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\security\Permission;

// use PHPJava\Packages\java\io\Serializable;
// use PHPJava\Packages\java\security\Guard;

/**
 * The `URLPermission` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\security\Permission
 */
class URLPermission extends Permission /* implements Serializable, Guard */
{

    /**
     * Returns true if, this.getActions().equals(p.getActions()) and p's url equals this's url.
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
     * Returns the normalized method list and request header list, in the form:
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
     * Returns a hashcode calculated from the hashcode of the actions String and the url string.
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
     * Checks if this URLPermission implies the given permission.
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
}
