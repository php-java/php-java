<?php
namespace PHPJava\Packages\java\net;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\net\SocketOption;
// use PHPJava\Packages\java\util\Set;

/**
 * The `DatagramSocketImpl` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class DatagramSocketImpl extends _Object /* implements SocketOption, Set */
{
    /**
     * The file descriptor object.
     *
     * @var mixed $fd
     */
    protected $fd = null;

    /**
     * The local port number.
     *
     * @var mixed $localPort
     */
    protected $localPort = null;


    /**
     * Binds a datagram socket to a local port and address.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#bind
     */
    public function bind($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Close the socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#close
     */
    public function close($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Connects a datagram socket to a remote destination.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#connect
     */
    public function connect($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates a datagram socket.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#create
     */
    public function create($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Disconnects a datagram socket from its remote destination.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#disconnect
     */
    public function disconnect($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the datagram socket file descriptor.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getFileDescriptor
     */
    public function getFileDescriptor($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Gets the local port.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getLocalPort
     */
    public function getLocalPort($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called to get a socket option.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#getOption
     */
    public function getOption($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Retrieve the TTL (time-to-live) option.
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
     * Deprecated.use getTimeToLive instead.
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
     * Join the multicast group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#join
     */
    public function join($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Join the multicast group.
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
     * Leave the multicast group.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#leave
     */
    public function leave($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Leave the multicast group.
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
     * Peek at the packet to see who it is from.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#peek
     */
    public function peek($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Peek at the packet to see who it is from.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#peekData
     */
    public function peekData($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Receive the datagram packet.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#receive
     */
    public function receive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sends a datagram packet.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#send
     */
    public function send($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Called to set a socket option.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#setOption
     */
    public function setOption($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Set the TTL (time-to-live) option.
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
     * Deprecated.use setTimeToLive instead.
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

    /**
     * Returns a set of SocketOptions supported by this impl and by this impl's socket (DatagramSocket or MulticastSocket)
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/net/package-summary.html#supportedOptions
     */
    public function supportedOptions($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
