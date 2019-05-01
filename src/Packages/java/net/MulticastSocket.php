<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\net\DatagramSocket;

// use PHPJava\Packages\java\io\Closeable;
// use PHPJava\Packages\java\lang\AutoCloseable;

/**
 * The `MulticastSocket` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 * @parent \PHPJava\Packages\java\net\DatagramSocket
 */
class MulticastSocket extends DatagramSocket /* implements Closeable, AutoCloseable */
{

    /**
     * Retrieve the address of the network interface used for multicast packets.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getInterface
     */
    public function getInterface($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Get the setting for local loopback of multicast datagrams.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLoopbackMode
     */
    public function getLoopbackMode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Get the multicast network interface set.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getNetworkInterface
     */
    public function getNetworkInterface($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Get the default time-to-live for multicast packets sent out on the socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getTimeToLive
     */
    public function getTimeToLive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.use the getTimeToLive method instead, which returns an int instead of a byte.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getTTL
     */
    public function getTTL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Joins a multicast group.
     * Joins the specified multicast group at the specified interface.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#joinGroup
     */
    public function joinGroup($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Leave a multicast group.
     * Leave a multicast group on a specified local interface.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#leaveGroup
     */
    public function leaveGroup($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.Use the following code or its equivalent instead:  ......
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#send
     */
    public function send($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the multicast network interface used by methods whose behavior would be affected by the value of the network interface.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setInterface
     */
    public function setInterface($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Disable/Enable local loopback of multicast datagrams The option is used by the platform's networking code as a hint for setting whether multicast data will be looped back to the local socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setLoopbackMode
     */
    public function setLoopbackMode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Specify the network interface for outgoing multicast datagrams sent on this socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setNetworkInterface
     */
    public function setNetworkInterface($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the default time-to-live for multicast packets sent out on this MulticastSocket in order to control the scope of the multicasts.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setTimeToLive
     */
    public function setTimeToLive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.use the setTimeToLive method instead, which uses int instead of byte as the type for ttl.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setTTL
     */
    public function setTTL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
