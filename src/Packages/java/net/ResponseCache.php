<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `ResponseCache` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ResponseCache extends _Object /* implements _List */
{

    /**
     * Retrieve the cached response based on the requesting uri, request method and request headers.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#get
     */
    public function get($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system-wide response cache.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefault
     */
    public static function static_getDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The protocol handler calls this method after a resource has been retrieved, and the ResponseCache must decide whether or not to store the resource in its cache.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#put
     */
    public function put($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets (or unsets) the system-wide cache.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefault
     */
    public static function static_setDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
