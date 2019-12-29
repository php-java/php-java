<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\_List;

/**
 * The `ProxySelector` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class ProxySelector extends _Object // implements _List
{
    /**
     * Called to indicate that a connection could not be established to a proxy/socks server.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connectFailed
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function connectFailed($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the system-wide proxy selector.
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
     * Returns a ProxySelector which uses the given proxy address for all HTTP and HTTPS requests.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#of
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_of($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Selects all the applicable proxies based on the protocol to access the resource with and a destination address to access the resource at.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#select
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function select($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets (or unsets) the system-wide proxy selector.
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
