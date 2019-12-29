<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\net\SocketOption;
// use PHPJava\Packages\java\util\Set;

/**
 * The `DatagramSocketImpl` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class DatagramSocketImpl extends Object_ // implements SocketOption, Set
{
    /**
     * The file descriptor object.
     *
     * @var mixed $fd
     */
    protected $fd;

    /**
     * The local port number.
     *
     * @var mixed $localPort
     */
    protected $localPort;

    /**
     * Binds a datagram socket to a local port and address.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#bind
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function bind($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Close the socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#close
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Connects a datagram socket to a remote destination.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connect
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function connect($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a datagram socket.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#create
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function create($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Disconnects a datagram socket from its remote destination.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#disconnect
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function disconnect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the datagram socket file descriptor.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFileDescriptor
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getFileDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the local port.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalPort
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getLocalPort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called to get a socket option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getOption
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getOption($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieve the TTL (time-to-live) option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getTimeToLive
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getTimeToLive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.use getTimeToLive instead.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getTTL
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getTTL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Join the multicast group.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#join
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function join($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Join the multicast group.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#joinGroup
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function joinGroup($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Leave the multicast group.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#leave
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function leave($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Leave the multicast group.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#leaveGroup
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function leaveGroup($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Peek at the packet to see who it is from.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#peek
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function peek($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Peek at the packet to see who it is from.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#peekData
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function peekData($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Receive the datagram packet.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#receive
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function receive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sends a datagram packet.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#send
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function send($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called to set a socket option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setOption
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setOption($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the TTL (time-to-live) option.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setTimeToLive
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setTimeToLive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.use setTimeToLive instead.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setTTL
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setTTL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a set of SocketOptions supported by this impl and by this impl's socket (DatagramSocket or MulticastSocket).
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#supportedOptions
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function supportedOptions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
