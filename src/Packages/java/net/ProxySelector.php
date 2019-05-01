<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `ProxySelector` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ProxySelector extends _Object /* implements _List */
{

    /**
     * Called to indicate that a connection could not be established to a proxy/socks server.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connectFailed
     */
    public function connectFailed($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system-wide proxy selector.
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
     * Returns a ProxySelector which uses the given proxy address for all HTTP and HTTPS requests.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#of
     */
    public static function static_of($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Selects all the applicable proxies based on the protocol to access the resource with and a destination address to access the resource at.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#select
     */
    public function select($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets (or unsets) the system-wide proxy selector.
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
