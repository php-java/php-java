<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `Inet6Address` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\InetAddress
 */
class Inet6Address extends InetAddress // implements Serializable
{
    /**
     * Compares this object against the specified object.
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
     * Returns the raw IP address of this InetAddress object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Create an Inet6Address in the exact manner of InetAddress.getByAddress(String,byte[]) except that the IPv6 scope_id is set to the given numeric value.
     * Create an Inet6Address in the exact manner of InetAddress.getByAddress(String,byte[]) except that the IPv6 scope_id is set to the value corresponding to the given interface for the address type specified in addr.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getByAddress
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_getByAddress($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the IP address string in textual presentation.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHostAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getHostAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the scoped interface, if this instance was created with with a scoped interface.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getScopedInterface
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getScopedInterface($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the numeric scopeId, if this instance is associated with an interface.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getScopeId
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getScopeId($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a hashcode for this IP address.
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
     * Utility routine to check if the InetAddress is a wildcard address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isAnyLocalAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isAnyLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is an IPv4 compatible IPv6 address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isIPv4CompatibleAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isIPv4CompatibleAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is an link local address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isLinkLocalAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isLinkLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is a loopback address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isLoopbackAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isLoopbackAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has global scope.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCGlobal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isMCGlobal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has link scope.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCLinkLocal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isMCLinkLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has node scope.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCNodeLocal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isMCNodeLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has organization scope.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCOrgLocal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isMCOrgLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has site scope.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCSiteLocal
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isMCSiteLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is an IP multicast address. 11111111 at the start of the address identifies the address as being a multicast address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMulticastAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isMulticastAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is a site local address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isSiteLocalAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isSiteLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
