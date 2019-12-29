<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\util\_List;

/**
 * The `ResponseCache` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class ResponseCache extends Object_ // implements _List
{
    /**
     * Retrieve the cached response based on the requesting uri, request method and request headers.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#get
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @param null|mixed $d
     * @throws NotImplementedException
     */
    public function get($a = null, $b = null, $c = null, $d = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system-wide response cache.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getDefault
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * The protocol handler calls this method after a resource has been retrieved, and the ResponseCache must decide whether or not to store the resource in its cache.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#put
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function put($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets (or unsets) the system-wide cache.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setDefault
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_setDefault($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
