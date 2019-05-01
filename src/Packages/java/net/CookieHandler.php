<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `CookieHandler` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class CookieHandler extends _Object /* implements _List */
{

    /**
     * Gets all the applicable cookies from a cookie cache for the specified uri in the request header.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#get
     */
    public function get($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system-wide cookie handler.
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
     * Sets all the applicable cookies, examples are response header fields that are named Set-Cookie2, present in the response headers into a cookie cache.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#put
     */
    public function put($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets (or unsets) the system-wide cookie handler.
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
