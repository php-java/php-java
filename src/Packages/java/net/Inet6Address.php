<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\net\InetAddress;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `Inet6Address` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\InetAddress
 */
class Inet6Address extends InetAddress /* implements Serializable */
{

    /**
     * Compares this object against the specified object.
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
     * Returns the raw IP address of this InetAddress object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getAddress
     */
    public function getAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Create an Inet6Address in the exact manner of InetAddress.getByAddress(String,byte[]) except that the IPv6 scope_id is set to the given numeric value.
     * Create an Inet6Address in the exact manner of InetAddress.getByAddress(String,byte[]) except that the IPv6 scope_id is set to the value corresponding to the given interface for the address type specified in addr.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getByAddress
     */
    public static function static_getByAddress($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the IP address string in textual presentation.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHostAddress
     */
    public function getHostAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the scoped interface, if this instance was created with with a scoped interface.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getScopedInterface
     */
    public function getScopedInterface($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the numeric scopeId, if this instance is associated with an interface.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getScopeId
     */
    public function getScopeId($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a hashcode for this IP address.
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
     * Utility routine to check if the InetAddress is a wildcard address.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isAnyLocalAddress
     */
    public function isAnyLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is an IPv4 compatible IPv6 address.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isIPv4CompatibleAddress
     */
    public function isIPv4CompatibleAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is an link local address.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isLinkLocalAddress
     */
    public function isLinkLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is a loopback address.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isLoopbackAddress
     */
    public function isLoopbackAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has global scope.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCGlobal
     */
    public function isMCGlobal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has link scope.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCLinkLocal
     */
    public function isMCLinkLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has node scope.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCNodeLocal
     */
    public function isMCNodeLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has organization scope.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCOrgLocal
     */
    public function isMCOrgLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the multicast address has site scope.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMCSiteLocal
     */
    public function isMCSiteLocal($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is an IP multicast address. 11111111 at the start of the address identifies the address as being a multicast address.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isMulticastAddress
     */
    public function isMulticastAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Utility routine to check if the InetAddress is a site local address.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isSiteLocalAddress
     */
    public function isSiteLocalAddress($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
