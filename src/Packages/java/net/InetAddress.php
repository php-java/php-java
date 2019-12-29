<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\io\Serializable;

/**
 * The `InetAddress` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class InetAddress extends Object_ // implements Serializable
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
     * Given the name of a host, returns an array of its IP addresses, based on the configured name service on the system.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getAllByName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getAllByName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an InetAddress object given the raw IP address .
     * Creates an InetAddress based on the provided host name and IP address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getByAddress
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public static function static_getByAddress($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Determines the IP address of a host, given the host's name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getByName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getByName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the fully qualified domain name for this IP address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getCanonicalHostName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCanonicalHostName($a = null)
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
     * Gets the host name for this IP address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getHostName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getHostName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the address of the local host.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalHost
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getLocalHost($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the loopback address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLoopbackAddress
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_getLoopbackAddress($a = null)
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
     * Utility routine to check if the InetAddress is an IP multicast address.
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
     * Test whether that address is reachable.
     * Test whether that address is reachable.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#isReachable
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public function isReachable($a = null, $b = null, $c = null)
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

    /**
     * Converts this IP address to a String.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
